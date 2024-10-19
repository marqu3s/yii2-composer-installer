# yii2-composer-installer-plugin

Composer custom installer for Yii2.

This installer allows you to install any package in the `common` folder of the Yii2 advanced application template.

If you have various applications sharing the same `common` folder, then turn your `common` folder into a \[private\] package and install it using composer.

Require this package in your `common` package's composer.json file and your package will be installed in the `common` folder instead of the default `vendor` folder.

```json
{
  "name": "vendor/my-common-folder",
  "type": "yii2-common",
  "require": {
    "marqu3s/yii2-composer-installer-plugin": "*"
  }
}
```

*IMPORTANT*: You must keep the `"type": "yii2-common"` line for this to work! This is how you tell composer wich installer to use to install your package.
