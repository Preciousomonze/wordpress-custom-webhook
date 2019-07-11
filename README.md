# WordPress Custom Webhook Class

**Contributors:** __Preciousomonze (Code Explorer) 🤓__

**Donate link:** <a href="https://rave.flutterwave.com/pay/preciousomonze" target="_blank">__Drop something for your boy  😋 🤓 🥳 🤑__</a>

**Requires at least:** 4.9

**Tested up to:** 5.2

**License:** GPLv3 or later

**License URI:** http://www.gnu.org/licenses/gpl-3.0.html

## Description
This class helps you create your custom webhook url you can use for whatever reason. you can include it in your plugin and call the file, or make it an mu-plugin(Must-Use plugin) (_Read about mu-plugins [here](https://wordpress.org/support/article/must-use-plugins/)_).

#### Reason: This was developed based on the vexation of Haastrup Adejoke trying to develop webhooks 😆😂

### How to use
#### Including it into your custom plugin
1.  Download the __class-wp-webhook.php__ file.
2.  Customize the following to your unique values:
  * _Class name_ : `Pekky_WP_Webhook` to your custom name you want
  * change the values of `private static $webhook`, `private static $webhook_tag`, and `private static $webhook_action` to what you want.
  ```php
    /**
      * Parent wekbhook
      * replace with a unique value you want
      * 
      * @var string
      */
     private static $webhook = 'pekky-api';
		
     /**
      * webhook tag
      * replace with a unique value you want
      * 
      * @var string
      */
     private static $webhook_tag = 'pekky_webhook';

     /**
       * Action to be triggered when the url is loaded
       * replace with a unique value you want
       * 
       * @var string
       */
     private static $webhook_action = 'hook_action';
  ```
  ###### This step 2 also applies to _Including it as an mu-plugin_
3.  🤧 that's all.

#### Including it into your custom plugin
1.  download the __mu-class-wp-webhook.php__ file in the repo.
2.  put the file in your wordpress site directory inside _wp-content/mu-plugins_ folder(__this the default mu-plugin folder, if you've altered it, please use your respective folder__).
3.  🤧 that's all.

## Frequently Asked Questions

### None 😁😗
#### If you have, feel free to create an issue.
