<h1 class="bd-title mb-0" id="content">Color</h1>



<h2 id="colors">Colors <a class="anchor-link" href="#colors" aria-label="Link to this section: Colors"></a>
</h2>
<small
    class="d-inline-flex mb-3 px-2 py-1 fw-semibold text-success-emphasis bg-success-subtle border border-success-subtle rounded-2">Added
    in v5.3.0</small>

<p>Bootstrap’s color palette has continued to expand and become more nuanced in v5.3.0. We’ve added new
    variables for <code>secondary</code> and <code>tertiary</code> text and background colors, plus
    <code>{color}-bg-subtle</code>, <code>{color}-border-subtle</code>, and
    <code>{color}-text-emphasis</code> for our theme colors. These new colors are available through Sass and
    CSS variables (but not our color maps or utility classes) with the express goal of making it easier to
    customize across multiple colors modes like light and dark. These new variables are globally set on
    <code>:root</code> and are adapted for our new dark color mode while our original theme colors remain
    unchanged.
</p>
<p>Colors ending in <code>-rgb</code> provide the <code>red, green, blue</code> values for use in
    <code>rgb()</code> and <code>rgba()</code> color modes. For example,
    <code>rgba(var(--bs-secondary-bg-rgb), .5)</code>.
</p>
<div class="bd-callout bd-callout-warning">
    <strong>Heads up!</strong> There’s some potential confusion with our new secondary and tertiary colors,
    and our existing secondary theme color, as well as our light and dark theme colors. Expect this to be
    ironed out in v6.
</div>

<div class="table-responsive">
    <table class="table table-swatches">
        <thead>
            <tr>
                <th style="width: 340px;">Description</th>
                <th style="width: 200px;" class="ps-0">Swatch</th>
                <th>Variables</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td rowspan="2">
                    <strong>Body —</strong> Default foreground (color) and background, including components.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2" style="background-color: var(--bs-body-color);">&nbsp;</div>
                </td>
                <td>
                    <code>--bs-body-color</code><br><code>--bs-body-color-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2 border" style="background-color: var(--bs-body-bg);">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-body-bg</code><br><code>--bs-body-bg-rgb</code>
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    <strong>Secondary —</strong> Use the <code>color</code> option for lighter text. Use the
                    <code>bg</code> option for dividers and to indicate disabled component states.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2" style="background-color: var(--bs-secondary-color);">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-secondary-color</code><br><code>--bs-secondary-color-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2 border" style="background-color: var(--bs-secondary-bg);">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-secondary-bg</code><br><code>--bs-secondary-bg-rgb</code>
                </td>
            </tr>
            <tr>
                <td rowspan="2">
                    <strong>Tertiary —</strong> Use the <code>color</code> option for even lighter text. Use
                    the <code>bg</code> option to style backgrounds for hover states, accents, and wells.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2" style="background-color: var(--bs-tertiary-color);">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-tertiary-color</code><br><code>--bs-tertiary-color-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2 border" style="background-color: var(--bs-tertiary-bg);">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-tertiary-bg</code><br><code>--bs-tertiary-bg-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Emphasis —</strong> For higher contrast text. Not applicable for backgrounds.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2" style="background-color: var(--bs-emphasis-color);">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-emphasis-color</code><br><code>--bs-emphasis-color-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Border —</strong> For component borders, dividers, and rules. Use
                    <code>--bs-border-color-translucent</code> to blend with backgrounds with an
                    <code>rgba()</code> value.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2" style="background-color: var(--bs-border-color);">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-border-color</code><br><code>--bs-border-color-rgb</code>
                </td>
            </tr>
            <tr>
                <td rowspan="4">
                    <strong>Primary —</strong> Main theme color, used for hyperlinks, focus styles, and
                    component and form active states.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2 bg-primary">&nbsp;</div>
                </td>
                <td>
                    <code>--bs-primary</code><br><code>--bs-primary-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="background-color: var(--bs-primary-bg-subtle)">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-primary-bg-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="border: 5px var(--bs-primary-border-subtle) solid">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-primary-border-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="py-3 fw-bold h5" style="color: var(--bs-primary-text-emphasis)">Text</div>
                </td>
                <td>
                    <code>--bs-primary-text-emphasis</code>
                </td>
            </tr>
            <tr>
                <td rowspan="4">
                    <strong>Success —</strong> Theme color used for positive or successful actions and
                    information.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2 bg-success">&nbsp;</div>
                </td>
                <td>
                    <code>--bs-success</code><br><code>--bs-success-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="background-color: var(--bs-success-bg-subtle)">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-success-bg-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="border: 5px var(--bs-success-border-subtle) solid">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-success-border-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="py-3 fw-bold h5" style="color: var(--bs-success-text-emphasis)">Text</div>
                </td>
                <td>
                    <code>--bs-success-text-emphasis</code>
                </td>
            </tr>
            <tr>
                <td rowspan="4">
                    <strong>Danger —</strong> Theme color used for errors and dangerous actions.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2 bg-danger">&nbsp;</div>
                </td>
                <td>
                    <code>--bs-danger</code><br><code>--bs-danger-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="background-color: var(--bs-danger-bg-subtle)">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-danger-bg-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="border: 5px var(--bs-danger-border-subtle) solid">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-danger-border-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="py-3 fw-bold h5" style="color: var(--bs-danger-text-emphasis)">Text</div>
                </td>
                <td>
                    <code>--bs-danger-text-emphasis</code>
                </td>
            </tr>
            <tr>
                <td rowspan="4">
                    <strong>Warning —</strong> Theme color used for non-destructive warning messages.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2 bg-warning">&nbsp;</div>
                </td>
                <td>
                    <code>--bs-warning</code><br><code>--bs-warning-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="background-color: var(--bs-warning-bg-subtle)">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-warning-bg-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="border: 5px var(--bs-warning-border-subtle) solid">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-warning-border-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="py-3 fw-bold h5" style="color: var(--bs-warning-text-emphasis)">Text</div>
                </td>
                <td>
                    <code>--bs-warning-text-emphasis</code>
                </td>
            </tr>
            <tr>
                <td rowspan="4">
                    <strong>Info —</strong> Theme color used for neutral and informative content.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2 bg-info">&nbsp;</div>
                </td>
                <td>
                    <code>--bs-info</code><br><code>--bs-info-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="background-color: var(--bs-info-bg-subtle)">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-info-bg-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="border: 5px var(--bs-info-border-subtle) solid">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-info-border-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="py-3 fw-bold h5" style="color: var(--bs-info-text-emphasis)">Text</div>
                </td>
                <td>
                    <code>--bs-info-text-emphasis</code>
                </td>
            </tr>
            <tr>
                <td rowspan="4">
                    <strong>Light —</strong> Additional theme option for less contrasting colors.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2 bg-light">&nbsp;</div>
                </td>
                <td>
                    <code>--bs-light</code><br><code>--bs-light-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="background-color: var(--bs-light-bg-subtle)">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-light-bg-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="border: 5px var(--bs-light-border-subtle) solid">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-light-border-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="py-3 fw-bold h5" style="color: var(--bs-light-text-emphasis)">Text</div>
                </td>
                <td>
                    <code>--bs-light-text-emphasis</code>
                </td>
            </tr>
            <tr>
                <td rowspan="4">
                    <strong>Dark —</strong> Additional theme option for higher contrasting colors.
                </td>
                <td class="ps-0">
                    <div class="p-3 rounded-2 bg-dark">&nbsp;</div>
                </td>
                <td>
                    <code>--bs-dark</code><br><code>--bs-dark-rgb</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="background-color: var(--bs-dark-bg-subtle)">&nbsp;
                    </div>
                </td>
                <td>
                    <code>--bs-dark-bg-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="p-3 rounded-2" style="border: 5px var(--bs-dark-border-subtle) solid">
                        &nbsp;</div>
                </td>
                <td>
                    <code>--bs-dark-border-subtle</code>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="py-3 fw-bold h5" style="color: var(--bs-dark-text-emphasis)">Text</div>
                </td>
                <td>
                    <code>--bs-dark-text-emphasis</code>
                </td>
            </tr>
        </tbody>
    </table>
</div>
