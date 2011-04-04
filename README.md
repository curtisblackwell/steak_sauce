cpb Steak Sauce
===============

cpb Steak Sauce is an ExpressionEngine 2 plugin that converts integers to their corresponding letters and vice versa. For example, a = 1, b = 2, c = 3, etc.

Installation
------------

Upload the __`steak_sauce`__ folder to __`system/expressionengine/third_party`__


Usage
-----

Simply wrap the tags around the integer or letter like so:

	{exp:steak_sauce}a{/exp:steak_sauce} returns "1"
	{exp:steak_sauce}1{/exp:steak_sauce} returns "a"

### Example Usage

I'm using this to convert Matrix `{row_count}`s to letters on a personal project cataloguing my vinyl records (Side A, Side B, etc.).

Known Issues
------------

Due to a lack of knowledge, this plugin is limited to lowercase letters. I'll probably update it to support capital letters as well once I learn some more PHP.
