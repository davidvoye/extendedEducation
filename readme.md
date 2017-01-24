#Western Washington College Theme WWUZEN#
A Drupal Zen Sub-Theme.

##Dependencies##
  * [Zen 5.x](http://drupal.org/project/zen)
  * [Menu Block](http://drupal.org/project/menu_block)
  * [Accordion Menu](http://drupal.org/project/accordion_menu)
  * [jQuery Update](http://drupal.org/project/jquery_update)
  * [GSA](https://drupal.org/project/google_appliance)
  * [WWU Zen GSA](https://bitbucket.org/wwuweb/wwu-google-search-appliance)

##Configuration##
1. Add a main menu block
    - Structure, Blocks -> Add Menu Block (Near the top of the screen) - Configure as follows:
        - Block Title &lt;none&gt;
        - Menu -> Main Menu
        - Starting Level -> 1st level (primary)
        - Max depth: Unlimited
    - Advanced Options:
        - Check "Expand all children of this tree."
        - Fixed Parent item -> Main Menu
    - Region Settings:
        - WWUZen -> Navigation bar
2. Enable jQuery update and select jQuery version 1.7 as the library to use.
    - Configuration -> Development -> jQuery update
        - jQuery Version -> 1.7
        - jQuery compression level -> Production (minified)
        - jQuery and jQuery UI CDN -> Google
3. Enable the Google Search Appliance (GSA) Module
    - Modules
        - Check the box next to Google Search Appliance
        - Click the save button
4. Enable the WWU Google Search Appliance Module
    - Modules
        - Check the box next to WWU Zen Google Search Appliance
        - Click the save button


###Copyright Statement###

Copyright 2013 Western Washington University Web Technologies Group Licensed under the Educational Community License, Version 2.0 (the "License") you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.osedu.org/licenses/ECL-2.0

Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express
or implied. See the License for the specific language governing permissions and limitations under the License.


Gruntyplate
===========

## Modernizr

  ```
  grunt modernizr
  ```

  This task will search your JS and CSS for any modernizr tasks defined and build a custom build based on this.  If for some reason a test is not defined in your JS/CSS and you want to add it, add it to the `tests` array in the modernizr task config.

  Note: This will not automatically update on watch.  You will need to re-run the grunt modernizr task.


### Live Reload
All you need is install a Chrome extension
https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei?hl=en
It is turned on/off in the `grunt watch` config.

### Watch
  Watch JS and CSS

  ```
  grunt watch
  ```

  Watch JS Only:

  ```
  grunt watch:js
  ```

  Watch CSS Only
  ```
  grunt watch:css
  ```
