<?php

// spl_autoload_registerとは呼び出したクラス、インターフェースが、自ファイルやrequireされたものの中に定義されていなかった場合に、クラスのオートロード処理といったいわばセーフティネットのようなものを登録できる関数のこと
spl_autoload_register(function($class) {
  $prefix = 'MyApp\\';

  // strposで特定の文字列を含んでいるかを判定,見つかった場合はその文字列の開始位置を返す。よってこの場合は0となる。
  if(strpos($class, $prefix) === 0) {
    $className = substr($class, strlen($prefix));
    $classFilePath = __DIR__ . '/' . $className . '.php';

    if (file_exists($classFilePath)) {
      require $classFilePath;
    } else {
      echo 'No such class: ' . $className;
      exit;
    }
  }

});