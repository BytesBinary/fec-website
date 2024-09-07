import{$ as o}from"./jquery-vEc8DvAz.js";o(document).ready(function(){let e=1;o("#add-image").on("click",function(){e++;const n=`
            <div class="col-sm-4">
                <input type="file" name="bg_image[]" id="bg_image_${e}" class="form-control">
            </div>
        `;console.log(n),o("#background-images").append(n)})});
