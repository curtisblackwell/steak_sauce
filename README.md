Steak Sauce
===========

Steak Sauce is an ExpressionEngine 2 plugin that converts integers to their corresponding letters and vice versa. For example, `A = 1`, `B = 2`, `C = 3`, etc.

Installation
------------

Upload the `steak_sauce` folder to `system/expressionengine/third_party`


Usage
-----

Simply wrap the tags around the integer or letter like so:

    {exp:steak_sauce}A{/exp:steak_sauce} returns "1"
    {exp:steak_sauce}1{/exp:steak_sauce} returns "A"

If you want to convert integers to lowercase letters, use the case parameter:

    {exp:steak_sauce case="lowercase"}1{/exp:steak_sauce} returns "a"

### Example Usage

I'm using this to convert Matrix `{row_count}`s to letters on a personal project cataloguing my vinyl records (Side A, Side B, etc.).

Thanks
------

David Hyland - lowercase letter support

Changelog
---------

### 2.0

Support for numbers over 26 / letter combinations.

* `AA = 27`
* `AB = 28`
