<?php

class A
{
    final const X = "";
}

class B extends A
{
    // error
    // const X = "@";
}

echo B::X;
