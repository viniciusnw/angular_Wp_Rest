# Changelog

##### v1.2.4
* add check if `$filter` array is empty

##### v1.2.3
* add array check for `$this->taxonomy_settings`

##### v1.2.2
* fix issues when registering taxonomy across multiple post type
* remove wrapper function `options_merge`

##### v1.2.1
* reduce the defaults within the class
* replace contents of `options_merge` function with `array_replace_recursive`

##### v1.2.0
* allow taxonomies to be sorted with the `sortable()` method
* use of `.gitattributes` to make package lighter when deploying for production.

##### v1.1.0
* make repository a composer package

##### v1.0.2
* ability to use dashicons with `menu_icon()` method
* removed old custom icon functions

##### v1.0.1
* fixed issue with registering taxonomies
* fixed issue with options merge, now accepts boolean
* register_taxonomy method can now register exisiting taxonomies to post type