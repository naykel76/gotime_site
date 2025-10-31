<div class="toc" data-toc>

- [Usage](#usage)
    - [Out of Box](#out-of-box)
- [Properties](#properties)

</div>

# Menu Component

- Uses the same JSON configuration as the RouteBuilder


## Usage

- Specify a different menu group by setting the `filename="nav-demo" menuname` attribute :
- Specify a different navigation file by setting the `filename` attribute By
  default the menu component renders the `main` menu from `nav-main.json`

```html +torchlight-blade
@verbatim
@endverbatim
```
<x-gt-menu />

### Out of Box 

<x-gt-menu layout="dropdown" class="menu" />
```html +parse

```



        <!-- <x-gt-menu filename="nav-demo" /> -->
        <!-- <x-gt-menu filename="nav-demo" withIcons/> -->


- it is not until you add a class that the menu styles are applied. i am not
  sure if this is the best approach but it keeps the default output clean.
- consider handling this with a config option instead?

























## Properties
  
| Property    | Type   | Default    | Description                         |
| ----------- | ------ | ---------- | ----------------------------------- |
| `filename`  | string | `nav-main` | Name of JSON file in navs directory |
| `menuname`  | string | `main`     | Specific menu from JSON file        |
| `layout`    | string | `collapse` | Menu layout: collapse or dropdown   |
| `trigger`   | string | `click`    | Menu trigger: click, hover, or none |
| `title`     | string |            | Menu title (free type)              |
| `itemClass` | string |            | CSS class for menu items            |
| `iconClass` | string |            | CSS class for icons                 |
| `withIcons` | bool   | `false`    | Whether to show icons               |
| `newWindow` | bool   | `false`    | Open links in a new window          |
| `open`      | bool   | `false`    | Default state for collapse menu     |

<!-- some of these are handled direct in the nav file and others when the component is called  -->
