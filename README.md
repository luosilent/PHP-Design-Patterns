# PHP-Design-Patterns 5种设计模式

# 一、设计模式概述

设计模式（Design pattern）是一套被反复使用、多数人知晓的、经过分类编目的、代码设计经验的总结。使用设计模式是为了可重用代码、让代码更容易被他人理解、保证代码可靠性...


# 二、开闭原则

开闭原则（OCP）是面向对象设计中“可复用设计”的基石，是面向对象设计中最重要的原则之一，其它很多的设计原则都是实现开闭原则的一种手段...


# 三、里氏代换原则

里氏替换原则LSP讲的是基类和子类的关系。只有当这种关系存在时，里氏代换关系才存在。如果两个具体的类A，B之间的关系违反了LSP的设计...


# 四、接口隔离原则

客户端不应该依赖它不需要的接口；一个类对另一个类的依赖应该建立在最小的接口上。使用多个专门的接口比使用单一的总接口要好。一个类对另外一个类的依赖性应当是建立在最小的接口上的...


# 创建型模式

## 一、工厂模式 (factory pattern)

工厂模式(factory pattern)是我们最常用的实例化对象模式了，是用工厂方法代替new操作的一种模式。著名的Jive论坛 ,就大量使用了工厂模式，工厂模式在Java程序系统可以说是随处可见...


## 二、单例模式 (Singleton pattern)

单例模式(Singleton pattern)是一种常用的软件设计模式。在它的核心结构中只包含一个被称为单例类的特殊类。通过单例模式可以保证系统中一个类只有一个实例而且该实例易于外界访问，从而方便对实例个数的控制并节约系统资源...


## 三、建造者模式 (Builder Pattern)

建造模式（Builder Pattern）是对象的创建模式。它可以将一个产品的内部表象与产品的生成过程分割开来，从而可以使一个建造过程生成具有不同的内部表象的产品对象...


## 四、原型模式（Prototype）

Prototype原型模式是一种创建型设计模式，Prototype模式允许一个对象再创建另外一个可定制的对象，根本无需知道任何如何创建的细节,工作原理是...


# 结构型模式

## 一、适配器模式 (Adapter Pattern)

Adapter模式也叫适配器模式，是构造型模式之一，通过Adapter模式可以改变已有类（或外部类）的接口形式。适配器模式应用场景...


## 二、组合模式 (Composite Pattern)

组合模式：允许客户将对象组合成树形结构来表现"整体/部分”层次结构。组合能让客户以一致的方式处理个别对象以及对象组合...


## 三、外观模式(门面模式)

外观模式是指通过外观的包装，使应用程序只能看到外观对象，而不会看到具体的细节对象，这样无疑会降低应用程序的复杂度，并且提高了程序的可维护性...


## 四、代理模式

代理模式的作用和继承以及接口和组合的作用类似,都是为了聚合共用部分,减少公共部分的代码。不同的是相比起继承,他们的语境不同,继承要表达的含义是 is-a, 而代理要表达的含义更接近于接口, 是 has-a,而且使用代理的话应了一句话"少用继承,多用组合"...


## 五、装饰模式

在不必改变原类文件和使用继承的情况下，动态地扩展一个对象的功能。它是通过创建一个包装对象，也就是装饰来包裹真实的对象...
