### Installation
Upload the `steak_sauce` folder to `system/expressionengine/third_party`.

### Usage
Simply wrap the tags around the integer or letter like so:

    {exp:steak_sauce}A{/exp:steak_sauce} returns "1"
    {exp:steak_sauce}1{/exp:steak_sauce} returns "A"

If you want to convert integers to lowercase letters, use the case parameter:

    {exp:steak_sauce case="lowercase"}1{/exp:steak_sauce} returns "a"
