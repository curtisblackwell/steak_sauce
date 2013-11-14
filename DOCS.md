### Installation
Upload the `steak_sauce` folder to `system/expressionengine/third_party`.

### `{exp:steak_sauce}`
`{exp:steak_sauce}` converts integers to letters and vice versa.

    <p>{exp:steak_sauce}A{/exp:steak_sauce}</p>
    <p>{exp:steak_sauce}1{/exp:steak_sauce}</p>

returns

    <p>1</p>
    <p>A</p>

#### Optional Setting
##### case
    case=""

`case` has one valid value: `lowercase`. It converts text to lowercase.

    {exp:steak_sauce case="lowercase"}1{/exp:steak_sauce}
    
returns

    a
