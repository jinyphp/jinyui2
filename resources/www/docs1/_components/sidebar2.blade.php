@php
$jsonData = '{
"items": [
{
"name": "accessibility",
"navlink": "/tailwind/accessibility",
"children": [
{"name": "Forced Color Adjust", "navlink": "/tailwind/accessibility/forcedColorAdjust"},
{"name": "Screen Readers", "navlink": "/tailwind/accessibility/screenReaders"}
]
},
{
"name": "backgrounds",
"navlink": "/tailwind/backgrounds",
"children": [
{"name": "Background Attachment", "navlink": "/tailwind/backgrounds/backgroundAttachment"},
{"name": "Background Clip", "navlink": "/tailwind/backgrounds/backgroundClip"},
{"name": "Background Color", "navlink": "/tailwind/backgrounds/backgroundColor"},
{"name": "Background Image", "navlink": "/tailwind/backgrounds/backgroundImage"},
{"name": "Background Origin", "navlink": "/tailwind/backgrounds/backgroundOrigin"},
{"name": "Background Position", "navlink": "/tailwind/backgrounds/backgroundPosition"},
{"name": "Background Repeat", "navlink": "/tailwind/backgrounds/backgroundRepeat"},
{"name": "Background Size", "navlink": "/tailwind/backgrounds/backgroundSize"},
{"name": "Gradient Color Stops", "navlink": "/tailwind/backgrounds/gradientColorStops"}
]
},
{
"name": "borders",
"navlink": "/tailwind/borders",
"children": [
{"name": "Border Color", "navlink": "/tailwind/borders/borderColor"},
{"name": "Border Radius", "navlink": "/tailwind/borders/borderRadius"},
{"name": "Border Style", "navlink": "/tailwind/borders/borderStyle"},
{"name": "Border Width", "navlink": "/tailwind/borders/borderWidth"},
{"name": "Divide Color", "navlink": "/tailwind/borders/divideColor"},
{"name": "Divide Style", "navlink": "/tailwind/borders/divideStyle"},
{"name": "Divide Width", "navlink": "/tailwind/borders/divideWidth"},
{"name": "Outline Color", "navlink": "/tailwind/borders/outlineColor"},
{"name": "Outline Offset", "navlink": "/tailwind/borders/outlineOffset"},
{"name": "Outline Style", "navlink": "/tailwind/borders/outlineStyle"},
{"name": "Outline Width", "navlink": "/tailwind/borders/outlineWidth"},
{"name": "Ring Color", "navlink": "/tailwind/borders/ringColor"},
{"name": "Ring Width", "navlink": "/tailwind/borders/ringWidth"}
]
},
{
"name": "effects",
"navlink": "/tailwind/effects",
"children": [
{"name": "Background Blend Mode", "navlink": "/tailwind/effects/backgroundBlendMode"},
{"name": "Box Shadow", "navlink": "/tailwind/effects/boxShadow"},
{"name": "Box Shadow Color", "navlink": "/tailwind/effects/boxShadowColor"},
{"name": "Mix Blend Mode", "navlink": "/tailwind/effects/mixBlendMode"},
{"name": "Opacity", "navlink": "/tailwind/effects/opacity"}
]
},
{
"name": "filters",
"navlink": "/tailwind/filters",
"children": [
{"name": "Backdrop Blur", "navlink": "/tailwind/filters/backdropBlur"},
{"name": "Backdrop Brightness", "navlink": "/tailwind/filters/backdropBrightness"},
{"name": "Backdrop Contrast", "navlink": "/tailwind/filters/backdropContrast"},
{"name": "Backdrop Grayscale", "navlink": "/tailwind/filters/backdropGrayscale"},
{"name": "Backdrop Hue Rotate", "navlink": "/tailwind/filters/backdropHueRotate"},
{"name": "Backdrop Invert", "navlink": "/tailwind/filters/backdropInvert"},
{"name": "Backdrop Opacity", "navlink": "/tailwind/filters/backdropOpacity"},
{"name": "Backdrop Saturate", "navlink": "/tailwind/filters/backdropSaturate"},
{"name": "Backdrop Sepia", "navlink": "/tailwind/filters/backdropSepia"},
{"name": "Blur", "navlink": "/tailwind/filters/blur"},
{"name": "Brightness", "navlink": "/tailwind/filters/brightness"},
{"name": "Contrast", "navlink": "/tailwind/filters/contrast"},
{"name": "Drop Shadow", "navlink": "/tailwind/filters/dropShadow"},
{"name": "Grayscale", "navlink": "/tailwind/filters/grayscale"},
{"name": "Hue Rotate", "navlink": "/tailwind/filters/hueRotate"},
{"name": "Invert", "navlink": "/tailwind/filters/invert"},
{"name": "Saturate", "navlink": "/tailwind/filters/saturate"},
{"name": "Sepia", "navlink": "/tailwind/filters/sepia"}
]
},
{
"name": "flexbox",
"navlink": "/tailwind/flexbox",
"children": [
{"name": "Align Content", "navlink": "/tailwind/flexbox/alignContent"},
{"name": "Align Items", "navlink": "/tailwind/flexbox/alignItems"},
{"name": "Align Self", "navlink": "/tailwind/flexbox/alignSelf"},
{"name": "Flex", "navlink": "/tailwind/flexbox/flex"},
{"name": "Flex Basis", "navlink": "/tailwind/flexbox/flexBasis"},
{"name": "Flex Direction", "navlink": "/tailwind/flexbox/flexDirection"},
{"name": "Flex Grow", "navlink": "/tailwind/flexbox/flexGrow"},
{"name": "Flex Shrink", "navlink": "/tailwind/flexbox/flexShrink"},
{"name": "Flex Wrap", "navlink": "/tailwind/flexbox/flexWrap"},
{"name": "Gap", "navlink": "/tailwind/flexbox/gap"},
{"name": "Grid Auto Columns", "navlink": "/tailwind/flexbox/gridAutoColumns"},
{"name": "Grid Auto Flow", "navlink": "/tailwind/flexbox/gridAutoFlow"},
{"name": "Grid Auto Rows", "navlink": "/tailwind/flexbox/gridAutoRows"},
{"name": "Grid Column Start/End", "navlink": "/tailwind/flexbox/gridColumnStartEnd"},
{"name": "Grid Row Start/End", "navlink": "/tailwind/flexbox/gridRowStartEnd"},
{"name": "Grid Template Columns", "navlink": "/tailwind/flexbox/gridTemplateColumns"},
{"name": "Grid Template Rows", "navlink": "/tailwind/flexbox/gridTemplateRows"},
{"name": "Justify Content", "navlink": "/tailwind/flexbox/justifyContent"},
{"name": "Justify Items", "navlink": "/tailwind/flexbox/justifyItems"},
{"name": "Justify Self", "navlink": "/tailwind/flexbox/justifySelf"},
{"name": "Order", "navlink": "/tailwind/flexbox/order"},
{"name": "Place Content", "navlink": "/tailwind/flexbox/placeContent"},
{"name": "Place Items", "navlink": "/tailwind/flexbox/placeItems"},
{"name": "Place Self", "navlink": "/tailwind/flexbox/placeSelf"}
]
},
{
"name": "interactivity",
"navlink": "/tailwind/interactivity",
"children": [
{"name": "Accent Color", "navlink": "/tailwind/interactivity/accentColor"},
{"name": "Appearance", "navlink": "/tailwind/interactivity/appearance"},
{"name": "Caret Color", "navlink": "/tailwind/interactivity/caretColor"},
{"name": "Cursor", "navlink": "/tailwind/interactivity/cursor"},
{"name": "Pointer Events", "navlink": "/tailwind/interactivity/pointerEvents"},
{"name": "Resize", "navlink": "/tailwind/interactivity/resize"},
{"name": "Scroll Behavior", "navlink": "/tailwind/interactivity/scrollBehavior"},
{"name": "Scroll Margin", "navlink": "/tailwind/interactivity/scrollMargin"},
{"name": "Scroll Padding", "navlink": "/tailwind/interactivity/scrollPadding"},
{"name": "Scroll Snap Align", "navlink": "/tailwind/interactivity/scrollSnapAlign"},
{"name": "Scroll Snap Stop", "navlink": "/tailwind/interactivity/scrollSnapStop"},
{"name": "Scroll Snap Type", "navlink": "/tailwind/interactivity/scrollSnapType"},
{"name": "Touch Action", "navlink": "/tailwind/interactivity/touchAction"},
{"name": "User Select", "navlink": "/tailwind/interactivity/userSelect"},
{"name": "Will Change", "navlink": "/tailwind/interactivity/willChange"}
]
},
{
"name": "layout",
"navlink": "/tailwind/layout",
"children": [
{"name": "Aspect Ratio", "navlink": "/tailwind/layout/aspectRatio"},
{"name": "Box Decoration Break", "navlink": "/tailwind/layout/boxDecorationBreak"},
{"name": "Box Sizing", "navlink": "/tailwind/layout/boxSizing"},
{"name": "Break After", "navlink": "/tailwind/layout/breakAfter"},
{"name": "Break Before", "navlink": "/tailwind/layout/breakBefore"},
{"name": "Break Inside", "navlink": "/tailwind/layout/breakInside"},
{"name": "Clear", "navlink": "/tailwind/layout/clear"},
{"name": "Columns", "navlink": "/tailwind/layout/columns"},
{"name": "Container", "navlink": "/tailwind/layout/container"},
{"name": "Display", "navlink": "/tailwind/layout/display"},
{"name": "Floats", "navlink": "/tailwind/layout/floats"},
{"name": "Isolation", "navlink": "/tailwind/layout/isolation"},
{"name": "Object Fit", "navlink": "/tailwind/layout/objectFit"},
{"name": "Object Position", "navlink": "/tailwind/layout/objectPosition"},
{"name": "Overflow", "navlink": "/tailwind/layout/overflow"},
{"name": "Overscroll Behavior", "navlink": "/tailwind/layout/overscrollBehavior"},
{"name": "Position", "navlink": "/tailwind/layout/position"},
{"name": "Top/Right/Bottom/Left", "navlink": "/tailwind/layout/topRightBottomLeft"},
{"name": "Visibility", "navlink": "/tailwind/layout/visibility"},
{"name": "Z-Index", "navlink": "/tailwind/layout/zindex"}
]
},
{
"name": "sizing",
"navlink": "/tailwind/sizing",
"children": [
{"name": "Height", "navlink": "/tailwind/sizing/height"},
{"name": "Max Height", "navlink": "/tailwind/sizing/maxHeight"},
{"name": "Max Width", "navlink": "/tailwind/sizing/maxWidth"},
{"name": "Min Height", "navlink": "/tailwind/sizing/minHeight"},
{"name": "Min Width", "navlink": "/tailwind/sizing/minWidth"},
{"name": "Size", "navlink": "/tailwind/sizing/size"},
{"name": "Width", "navlink": "/tailwind/sizing/width"}
]
},
{
"name": "spacing",
"navlink": "/tailwind/spacing",
"children": [
{"name": "Margin", "navlink": "/tailwind/spacing/margin"},
{"name": "Padding", "navlink": "/tailwind/spacing/padding"},
{"name": "Space Between", "navlink": "/tailwind/spacing/spaceBetween"}
]
},
{
"name": "svg",
"navlink": "/tailwind/svg",
"children": [
{"name": "Fill", "navlink": "/tailwind/svg/fill"},
{"name": "Stroke", "navlink": "/tailwind/svg/stroke"},
{"name": "Stroke Width", "navlink": "/tailwind/svg/strokeWidth"}
]
},
{
"name": "tables",
"navlink": "/tailwind/tables",
"children": [
{"name": "Border Collapse", "navlink": "/tailwind/tables/borderCollapse"},
{"name": "Border Spacing", "navlink": "/tailwind/tables/borderSpacing"},
{"name": "Caption Side", "navlink": "/tailwind/tables/captionSide"},
{"name": "Table Layout", "navlink": "/tailwind/tables/tableLayout"}
]
},
{
"name": "transitions",
"navlink": "/tailwind/transitions",
"children": [
{"name": "Animation", "navlink": "/tailwind/transitions/animation"},
{"name": "Transition Delay", "navlink": "/tailwind/transitions/transitionDelay"},
{"name": "Transition Duration", "navlink": "/tailwind/transitions/transitionDuration"},
{"name": "Transition Property", "navlink": "/tailwind/transitions/transitionProperty"},
{"name": "Transition Timing Function", "navlink": "/tailwind/transitions/transitionTimingFunction"}
]
},
{
"name": "transforms",
"navlink": "/tailwind/transforms",
"children": [
{"name": "Rotate", "navlink": "/tailwind/transforms/rotate"},
{"name": "Scale", "navlink": "/tailwind/transforms/scale"},
{"name": "Skew", "navlink": "/tailwind/transforms/skew"},
{"name": "Transform Origin", "navlink": "/tailwind/transforms/transformOrigin"},
{"name": "Translate", "navlink": "/tailwind/transforms/translate"}
]
},
{
"name": "typography",
"navlink": "/tailwind/typography",
"children": [
{"name": "Content", "navlink": "/tailwind/typography/content"},
{"name": "Font Family", "navlink": "/tailwind/typography/fontFamily"},
{"name": "Font Size", "navlink": "/tailwind/typography/fontSize"},
{"name": "Font Smoothing", "navlink": "/tailwind/typography/fontSmoothing"},
{"name": "Font Style", "navlink": "/tailwind/typography/fontStyle"},
{"name": "Font Variant Numeric", "navlink": "/tailwind/typography/fontVariantNumeric"},
{"name": "Font Weight", "navlink": "/tailwind/typography/fontWeight"},
{"name": "Hyphens", "navlink": "/tailwind/typography/hyphens"},
{"name": "Letter Spacing", "navlink": "/tailwind/typography/letterSpacing"},
{"name": "Line Clamp", "navlink": "/tailwind/typography/lineClamp"},
{"name": "Line Height", "navlink": "/tailwind/typography/lineHeight"},
{"name": "List Style Image", "navlink": "/tailwind/typography/listStyleImage"},
{"name": "List Style Position", "navlink": "/tailwind/typography/listStylePosition"},
{"name": "List Style Type", "navlink": "/tailwind/typography/listStyleType"},
{"name": "Text Align", "navlink": "/tailwind/typography/textAlign"},
{"name": "Text Color", "navlink": "/tailwind/typography/textColor"},
{"name": "Text Decoration", "navlink": "/tailwind/typography/textDecoration"},
{"name": "Text Decoration Color", "navlink": "/tailwind/typography/textDecorationColor"},
{"name": "Text Decoration Style", "navlink": "/tailwind/typography/textDecorationStyle"},
{"name": "Text Decoration Thickness", "navlink": "/tailwind/typography/textDecorationThickness"},
{"name": "Text Indent", "navlink": "/tailwind/typography/textIndent"},
{"name": "Text Overflow", "navlink": "/tailwind/typography/textOverflow"},
{"name": "Text Transform", "navlink": "/tailwind/typography/textTransform"},
{"name": "Text Underline Offset", "navlink": "/tailwind/typography/textUnderlineOffset"},
{"name": "Text Wrap", "navlink": "/tailwind/typography/textWrap"},
{"name": "Vertical Align", "navlink": "/tailwind/typography/verticalAlign"},
{"name": "Whitespace", "navlink": "/tailwind/typography/whitespace"},
{"name": "Word Break", "navlink": "/tailwind/typography/wordBreak"}
]
}
]
}';

$items = json_decode($jsonData, true)['items'];
@endphp

<div class="cd-sidebar"
  data-filter-list='{"searchClass": "docs-search", "listClass": "docs-list", "valueNames": ["list-group-item"]}'>
  <div id="sidebarNav" class="offcanvas-lg offcanvas-start d-flex flex-column h-100" tabindex="-1"
    aria-labelledby="sidebarNavLabel">

    <div class="offcanvas-header py-3">
      <h5 class="offcanvas-title" id="sidebarNavLabel">Browse docs</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarNav"
        aria-label="Close"></button>
    </div>

    <div class="position-relative mx-4 ms-lg-0 mb-4">
      <i class="ci-search position-absolute top-50 start-0 translate-middle-y ms-3"></i>
      <input type="search" class="docs-search form-control form-icon-start" placeholder="Quick search...">
    </div>

    <div class="offcanvas-body d-block flex-grow-1 overflow-hidden pt-0 pe-0 pb-lg-2">
      <div id="scrollable" class="h-100 overflow-y-auto pe-4">
        <nav class="docs-list list-group list-group-borderless">
          <h3 class="h6 d-flex align-items-center pb-1 mb-2">
            <i class="ci-book fs-lg text-success me-2"></i>
            Getting started
          </h3>

          @foreach($items as $item)
          <div class="dropdown">
            <a class="list-group-item list-group-item-action justify-content-between dropdown-toggle text-wrap pe-3"
              href="#" onclick="toggleDropdown(event, this)">
              {{ $item['name'] }}
            </a>
            @if(isset($item['children']) && count($item['children']) > 0)
            <ul class="dropdown-menu">
              @foreach($item['children'] as $child)
              <li><a class="dropdown-item" href="{{ $child['navlink'] }}">{{ $child['name'] }}</a></li>
              @endforeach
            </ul>
            @endif
          </div>
          @endforeach

        </nav>
      </div>
    </div>
  </div>
</div>

<script>
function toggleDropdown(event, element) {
  event.preventDefault();
  const dropdownMenu = element.nextElementSibling;
  if (dropdownMenu && dropdownMenu.classList.contains('dropdown-menu')) {
    dropdownMenu.classList.toggle('show');

    // Close other open dropdowns
    const allDropdowns = document.querySelectorAll('.dropdown-menu');
    allDropdowns.forEach(dropdown => {
      if (dropdown !== dropdownMenu && dropdown.classList.contains('show')) {
        dropdown.classList.remove('show');
      }
    });
  }
}

// Close dropdowns when clicking outside
document.addEventListener('click', function(e) {
  if (!e.target.closest('.dropdown')) {
    const openDropdowns = document.querySelectorAll('.dropdown-menu.show');
    openDropdowns.forEach(dropdown => {
      dropdown.classList.remove('show');
    });
  }
});

function closeSidebar() {
  const sidebarNav = document.getElementById('sidebarNav');
  if (sidebarNav.classList.contains('show')) {
    const bsOffcanvas = new bootstrap.Offcanvas(sidebarNav);
    bsOffcanvas.hide();
  }
}
</script>

<style>
.dropdown-menu {
  display: none;
  position: static;
  float: none;
  width: auto;
  margin-top: 0;
  background-color: transparent;
  border: 0;
  box-shadow: none;
}

.dropdown-menu.show {
  display: block;
}

.dropdown-item {
  padding: 0.25rem 1rem;
  color: inherit;
}

.dropdown-item:hover,
.dropdown-item:focus {
  color: #16181b;
  text-decoration: none;
  background-color: #f8f9fa;
}
</style>