<?php

namespace Data\One {
  class Conflict {
    public string $name;
    public const string AUTHOR = "reimu";
    
    public static function sayHello(): void {
      echo "hello i'm " . self::AUTHOR  . PHP_EOL;
    }
  }
  class Math {
    public static function add(
      float $a, float $b): float {
        return $a + $b;
    }
  }
  function helpMe(): void {
    echo "help me" . PHP_EOL;
  }
  
  const COUNTRY = "Gensokyo" . PHP_EOL;
}

namespace Data\Two {
  class Conflict {
    public string $name;
    public const string AUTHOR = "sanae";

      public static function sayHello(): void {
      echo "hello i'm " . self::AUTHOR . PHP_EOL;
    }
  }
}
