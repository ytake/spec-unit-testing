# PHPSpecを始めてみよう
PHPSpecとPHPUnitに加えて、Behat、Codeceptionを加えています。    
ひとつのクラスに対して様々なテストフレームワークの違いをお楽しみいただけます。  
(CodeceptionはAcceptance Testsのみ)

[![Build Status](https://travis-ci.org/ytake/spec-unit-testing.svg?branch=master)](https://travis-ci.org/ytake/spec-unit-testing)  

## ライブラリ
```json
  "require-dev": {
    "phpunit/phpunit": "~4.0",
    "phpspec/phpspec": "~2.1",
    "behat/behat": "3.*",
    "bossa/phpspec2-expect": "*",
    "codeception/codeception": "*"
  }
```

## インストール
インストールするにはcomposerが必要です。  
```bash
$ composer install
```

## PHPUnit
PHPUnitのテストコードはtestsディレクトリ配下です。  
次のコマンドで実行できます 
```bash
$ vendor/bin/phpunit
```

## PHPSpec
PHPSpecのテストコードはspec配下です  
次のコマンドで実行できます  
```bash
$ vendor/bin/phpspec run
```

## Behat
Behatのフィーチャはfeatures配下です  
次のコマンドで実行できます  
```bash
$ vendor/bin/behat
```

## Codeception
Codeceptionのテストコードはcodeception_tests配下です  
次のコマンドで実行します    
```bash
$ vendor/bin/codecept build --config=codeception_tests
$ vendor/bin/codecept run --config=codeception_tests
```
