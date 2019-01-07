<?php
/**
 * User: Andy
 * Date: 2019/1/7
 * Time: 23:23
 */


/**
 * Class Newspaper
 * Subject, that who makes news
 */
class Newspaper implements SplSubject
{
    private $name;
    private $observers = [];
    private $content;

    public function __construct($name)
    {
        $this->name = $name;
    }

    // add observer
    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    // remove observer
    public function detach(\SplObserver $observer)
    {
        $key = array_search($observer, $this->observers, true);
        if($key) {
            unset($this->observers[$key]);
        }
    }

    // set breakout news
    public function breakOutNews($content)
    {
        $this->content = $content;
        $this->notify();
    }

    public function getContent()
    {
        return $this->content." ( {$this->name} ) ";
    }

    public function notify()
    {
        foreach($this->observers as $value) {
            $value->update($this);
        }
    }
}

/**
 * Observer, that who recieves news
 * Class Reader
 */
class Reader implements SplObserver
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(\SplSubject $subject)
    {
        echo $this->name . "is reading breakout news <b>". $subject->getContent() ." </b><br>";
    }
}

$newspaper = new Newspaper("Newyork Times");

$allen = new Reader("Allen");
$jim = new Reader("Jim");
$linda = new Reader("Linda");

// add reader
$newspaper->attach($allen);
$newspaper->attach($jim);
$newspaper->attach($linda);

// remove reader
//$newspaper->detach($linda);

// set breakouts
$newspaper->breakOutNews("USA break down");

// output
/*
Allenis reading breakout news USA break down ( Newyork Times )
Jimis reading breakout news USA break down ( Newyork Times )
*/

