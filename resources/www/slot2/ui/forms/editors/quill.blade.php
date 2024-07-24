<!-- Quill css -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<x-theme theme="adminkit">
    <x-main-content>
        <x-container-fluid>

            <!-- HTML -->
            <div id="snow-editor" style="height: 300px;">
                <h3><span class="ql-size-large">Hello World!</span></h3>
                <p><br></p>
                <h3>This is an simple editable area.</h3>
                <p><br></p>
                <ul>
                    <li>
                        Select a text to reveal the toolbar.
                    </li>
                    <li>
                        Edit rich document on-the-fly, so elastic!
                    </li>
                </ul>
                <p><br></p>
                <p>
                    End of simple area
                </p>
            </div>

        </x-www-uidemo>

<!-- quill js -->
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<script>
    var quill = new Quill("#snow-editor", {
        theme: "snow",
        modules: {
            toolbar: [
                [{
                    font: []
                }, {
                    size: []
                }],
                ["bold", "italic", "underline", "strike"],
                [{
                    color: []
                }, {
                    background: []
                }],
                [{
                    script: "super"
                }, {
                    script: "sub"
                }],
                [{
                    header: [!1, 1, 2, 3, 4, 5, 6]
                }, "blockquote", "code-block"],
                [{
                    list: "ordered"
                }, {
                    list: "bullet"
                }, {
                    indent: "-1"
                }, {
                    indent: "+1"
                }],
                ["direction", {
                    align: []
                }],
                ["link", "image", "video"],
                ["clean"]
            ]
        }
    }), quill = new
    Quill("#bubble-editor", {
        theme: "bubble"
    });

</script>
