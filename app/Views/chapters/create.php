<h2>Add Chapter</h2>
<form method="post" action="<?= site_url('admin/chapters/store') ?>">
      <?= csrf_field() ?>   <!-- 🔥 THIS LINE MUST BE HERE -->
    <div class="form-group">
        <label for="name">Chapter Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>


<div class="form-group">
    <label for="paper_id">Select Paper</label>
        <select name="paper_id" id="paper_id" class="form-control" required>


        <option value="">-- Select Paper --</option>
        <?php foreach ($papers as $paper): ?>
            <option value="<?= $paper['id'] ?>"><?= $paper['name'] ?></option>
        <?php endforeach; ?>
    </select>
</div>

    <div class="form-group">
      <label for="unit_id">Select Unit</label>
        
          <select name="unit_id" id="unit_id" class="form-control" required>  
        <option value="">-- Select Unit --</option>
        </select>

    </div>




    <div class="form-group">
        <label for="content">Content</label>
        <textarea name="content" class="form-control" id="editor"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>
<script
src="https://cdn.tiny.cloud/1/b2kytk0kpljz3uc9a5bo3vm4r3azd0jdov9qzdltds0ixm1h/tinymce/6/tinymce.min.js" referrerpolicy="origin">
</script>

//<script>
  //  tinymce.init({ selector: '#editor' });
//</script>



<script>
tinymce.init({
    selector: '#editor',
    height: 500,
    plugins: 'image link code fullscreen lists paste',
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright | image link | code fullscreen',
    
    // Prevent TinyMCE from modifying URLs
    convert_urls: false,
    relative_urls: false,
    remove_script_host: false,
    
    // Clean up HTML from WordPress
    cleanup: true,
    cleanup_on_startup: true,
    verify_html: true,
    fix_list_elements: true,
    
    // Handle image uploads
    images_upload_handler: function (blobInfo) {
        return new Promise((resolve, reject) => {
            const formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            
            // Get CSRF token from form
            const csrfToken = document.querySelector('input[name="<?= csrf_token() ?>"]')?.value;
            if(csrfToken) {
                formData.append('<?= csrf_token() ?>', csrfToken);
            }
            
            const xhr = new XMLHttpRequest();
            
            // Use absolute URL with base_url()
            const url = '<?= base_url('admin/chapters/uploadImage') ?>';
            xhr.open('POST', url);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            
            xhr.onload = function() {
                if (xhr.status !== 200) {
                    reject('HTTP Error: ' + xhr.status);
                    return;
                }
                
                try {
                    const json = JSON.parse(xhr.responseText);
                    if (json && json.location) {
                        resolve(json.location);
                    } else {
                        reject('Invalid response: ' + xhr.responseText);
                    }
                } catch (e) {
                    reject('Could not parse JSON response');
                }
            };
            
            xhr.onerror = function() {
                reject('Network error');
            };
            
            xhr.upload.onprogress = function(e) {
                console.log('Upload progress:', Math.round((e.loaded / e.total) * 100) + '%');
            };
            
            xhr.send(formData);
        });
    },
    
    // Handle WordPress content during paste
    paste_preprocess: function(plugin, args) {
        // Convert relative paths to absolute
        args.content = args.content.replace(
            /src="(\.\.\/)+uploads\/chapters\/([^"]+)"/gi, 
            'src="<?= base_url("uploads/chapters/$2") ?>"'
        );
        
        // Remove WordPress-specific classes
        args.content = args.content.replace(/class="wp-block-[^"]*"/gi, '');
        args.content = args.content.replace(/wp-block-list/gi, 'custom-list');
        args.content = args.content.replace(/is-layout-constrained/gi, '');
    },
    
    // Add autocomplete attributes to dialog inputs
    init_instance_callback: function(editor) {
        editor.on('focus', function() {
            setTimeout(function() {
                document.querySelectorAll('.tox-dialog input').forEach(input => {
                    if(!input.getAttribute('autocomplete')) {
                        input.setAttribute('autocomplete', 'off');
                    }
                });
            }, 100);
        });
    }
});
</script>








<script src='https://code.jquery.com/jquery-3.6.0.min.js'></script>
<script>
$('#paper_id').change(function() {
  $.get('<?= site_url('admin/chapters/getUnitsByPaper') ?>', {paper_id: $(this).val()}, function(data) {
    let options = '<option value="">-- Select Unit --</option>';
    data.forEach(function(unit) {
      options += `<option value="${unit.id}">${unit.name}</option>`;
    });
    $('#unit_id').html(options);
  });
});
</script>





               </main>
        </div>
    </div>