ActivatableBehavior
====================

The **ActivatableBehavior** behavior allows you to use isActive() method to a class.


Installation (Symfony 2 users)
------------------------------

### a) Add this in your deps:

```
[ActivatableBehavior]
    git=http://github.com/ClementGautier/ActivatableBehavior.git
    target=/propel-behaviors/ActivatableBehavior
```

### b) Add the following line to your `propel.ini`

``` ini
propel.behavior.activatable.class = path.to.activatable
```

Usage
-----

Add the following XML tag in your `schema.xml` file:

``` xml
<behavior name="activatable">
    <parameter name="column_name" value="is_active" />
    <parameter name="default" value=true />
</behavior>
```

Credits
-------

Clément Gautier <clement.gautier.76@gmail.com>
