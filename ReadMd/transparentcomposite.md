### 透明组合模式

组合模式用来解决整体和部分可以一直对待的问题。

比如说 文件夹 和其下的 文件， 可以复制文件也可以复制整个文件夹

组合模式是件对象组合成树形结构以表示整体和部分的层次结构，可以方便的增加节点

组合模式分为两种：

1. 透明模式
2. 安全模式

> 结构

Component ：包含树枝节点和叶子节点方法的抽象类

Composite ：树枝级节点有子节点 示例中指Dir文件夹

Leaf:叶子节点 没有子节点 示例中指File文件
![image](../image/patterns/transparentcomposite.jpg)
[透明代码](../TransparentComposite)
