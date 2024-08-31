import $ from 'jquery';

$(document).ready(function() {
    let count = 1; // Initial count of background images

    $('#add-image').on('click', function() {
        count++;
        const newImageField = `
            <div class="col-sm-4">
                <input type="file" name="bg_image[${count}]" id="bg_image_${count}" class="form-control">
            </div>
        `;
        console.log(newImageField)
        $('#background-images').append(newImageField);
    });
});
