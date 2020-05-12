<template lang="html">
    <div>
        <textarea :id="uniqueId" :value="value" class="c-form__group--control"></textarea>
    </div>
</template>

<script>
// Import TinyMCE
import tinymce from "tinymce/tinymce";

// A theme is also required
import "tinymce/themes/modern/theme";

// Any plugins you want to use has to be imported
import "tinymce/plugins/paste";
import "tinymce/plugins/link";
import "tinymce/plugins/autoresize";
import "tinymce/plugins/preview";
import "tinymce/plugins/autolink";
import "tinymce/plugins/directionality";
import "tinymce/plugins/visualblocks";
import "tinymce/plugins/visualchars";
import "tinymce/plugins/fullscreen";
import "tinymce/plugins/table";
import "tinymce/plugins/toc";
import "tinymce/plugins/advlist";
import "tinymce/plugins/lists";
import "tinymce/plugins/contextmenu";
import "tinymce/plugins/image";
import "tinymce/plugins/code";

export default {
  name: "tiny-mce",

  props: {
    id: {
      type: String,
      default: "editor",
    },
    value: {
      type: String,
      default: "",
    },
    toolbar: {
      default:
        "styleselect formatselect | bold italic strikethrough | link | alignleft aligncenter alignright alignjustify  | bullist outdent indent  | removeformat | blockquote image code",
    },
    menubar: {
      default: "link",
    },
    plugins: {
      default:
        "paste autoresize preview autolink directionality visualblocks visualchars fullscreen link table toc advlist lists contextmenu image ",
    },
    baseURL: {
      type: String,
      default: window.location.hostname + "/js/assets/tinyMCE",
    },
  },

  computed: {
    uniqueId() {
      return this.id + "-" + Math.floor(Math.random() * 100 + 1);
    },
  },

  mounted() {
    tinymce.init({
      inline_styles: false,
      //baseUrl: this.baseURL,
      skin_url: "/css/skins/lightgray",
      theme: "modern",
      selector: `#${this.uniqueId}`,
      //language: "hu_HU",
      resize: "both",
      toolbar: this.toolbar,
      //menubar : this.menubar,
      plugins: this.plugins,
      autoresize_bottom_margin: 10,
      autoresize_max_height: 1000,
      autoresize_min_height: 150,
      //paste_as_text: true,
      remove_linebreaks: false,
      force_br_newlines: true,
      force_p_newlines: false,
      gecko_spellcheck: true,
      forced_root_block: "",

      content_style: "body {margin: 10px; padding: 3px}",
      //content_css: "/css/assets/main.css?" + new Date().getTime(),
      style_formats: [
        {
          title: "Link, Gomb narancs (nagy)",
          inline: "span",
          classes:
            "c-button c-button__primary c-button__primary--colored c-button--raised",
        },
        {
          title: "Link, Gomb narancs (kicsi)",
          inline: "span",
          classes:
            "c-button c-button--sm c-button__primary c-button__primary--colored c-button--raised",
        },
      ],
      //link_list: this.contents,
      paste_remove_styles_if_webkit: true,
      init_instance_callback: editor => {
        editor.on("KeyUp", e => {
          this.$emit("input", editor.getContent());
          if (editor.getContent().words < 3) {
            alert("You need to enter 100 words or more.");
            return;
          }
        });

        editor.on("Change", e => {
          this.$emit("input", editor.getContent());
        });

        if (this.value != null) {
          editor.setContent(this.value);
        }
      },
      // without images_upload_url set, Upload tab won't show up
      images_upload_url: "/image-upload",

      // override default upload handler to simulate successful upload
      images_upload_handler: function(blobInfo, success, failure) {
        var xhr, formData, token;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open("POST", "/image-upload");

        token = document.head.querySelector('meta[name="csrf-token"]');
          console.log(token.content);
        xhr.setRequestHeader("X-CSRF-Token", token.content);

        xhr.onload = function() {
          var json;

          if (xhr.status != 200) {
            failure("HTTP Error: " + xhr.status);
            return;
          }

          json = JSON.parse(xhr.responseText);

          if (!json || typeof json.location != "string") {
            failure("Invalid JSON: " + xhr.responseText);
            return;
          }

          success(json.location);
        };

        formData = new FormData();
        formData.append("file", blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
      },
    });
  },
  destroyed() {
    tinymce.get(this.uniqueId).destroy();
  },
};
</script>

<style>
a {
  color: #fff !important;
}
</style>
