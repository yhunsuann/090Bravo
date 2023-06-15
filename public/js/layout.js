$(function(e) {

    $('#checkAll').click(function() {
        $('.sub_chk').prop('checked', $(this).prop('checked'));
    });

    $('.open-modal').click(function() {
        var id = $(this).data('id');
        var url = "/admin/recruitment/delete/" + id;
        $('#btn-delete-modal').attr("href", url);
    });

    $(function() {
        $('.datepicker').datepicker({
            language: "es",
            autoclose: true,
            format: "yyyy-mm-dd"
        });
    });

    $('.language').click(function() {
        $(".language").removeClass('active');
        $(this).addClass('active')
    });

    $('.summernote').summernote({
        placeholder: 'Enter Content',
        tabsize: 2,
        height: 100
    });

    $('.dropdown-toggle').dropdown()
    jQuery(document).ready(function() {
        ImgUpload();
    });

    var allImages = [];
    var imagesList = $('.images-list');

    if (imagesList.length > 0) {
        imagesList = imagesList[imagesList.length - 1];
        var imagesData = imagesList.getAttribute('value');
        allImages = JSON.parse(imagesData);
    }

    function ImgUpload() {
        var imgWrap = "";
        $(document).ready(function() {
            $('.upload__inputfile').on('change', function(e) {
                var files = e.target.files;
                var rowImage = $('.row.image.mb-2');
                var maxLength = parseInt($(this).attr('data-max_length'));
                if (rowImage.children('.col-3').length >= maxLength) {
                    // Đã đạt đến số lượng ảnh tối đa
                    return;
                }
                for (var i = 0; i < files.length; i++) {
                    var file = files[i];

                    if (!file.type.match('image.*')) {
                        // Loại bỏ các tệp không phải ảnh
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(f) {
                        return function(e) {
                            var html = '<div class="col-3 mt-2">' +
                                '<img src="' + e.target.result + '" class="" alt="' + f.name + '">' +
                                '<div class="upload__img-close"></div>' +
                                '</div>';

                            rowImage.append(html);
                        };
                    })(file);
                    reader.readAsDataURL(file);
                }
            });
        });

        $('body').on('click', ".upload__img-close", function(e) {
            $(this).parent().remove();
        });

        $('.upload__img-closes').click(function() {
            var file = $(this).closest('.col-3').find('input[name-image]').attr('name-image');
            for (var i = 0; i < allImages.length; i++) {
                if (allImages[i] === file) {
                    allImages.splice(i, 1);
                    break;
                }
            }
            var imagesList = $('.images-list');
            imagesList.attr('value', allImages);
            $(this).parent().remove();
        });
    }

    $('#add_contact').click(function() {
        $container = $('#container-form');
        $keyarray = $('.mb-3 .row .col-2 .contact_key').map(function() {
            return $(this).val();
        }).get();
        $name = $('#name').val();
        $key = $('#key').val();
        $type = $('#type').val();

        if ($name !== "" && $key !== "" && type !== "") {
            $flag = true;
            $keyarray.map(function($item) {

                if ($item == $key) {
                    $flag = false;
                }
            })

            if ($flag == true) {
                if ($type == 'text') {
                    $html = "<div class='mb-3'>" +
                        "<div class='row'>" +
                        "<div class='col-2'>" +
                        "<label for='title' class='form-label text-black lable_add_contact'>" + $name + "</label>" +
                        "<input type='hidden' name='" + $key + "[name]' value='" + $name + "' >" +
                        "<input type='hidden' name='" + $key + "[type]' value='" + $type + "'>" +
                        "<input class='contact_key' type='hidden' name='" + $key + "[contact_key]' value='" + $key + "'></input>" +
                        "<input type='hidden' name='" + $key + "[add]'></input>" +
                        "</div>" +
                        "<div class='col-10'>" +
                        "<input type='text' class='form-control' name='" + $key + "[value]' id='title' placeholder='Enter title'>" +
                        "</div>" +
                        "</div>" +
                        "</div>";
                } else if ($type == 'image') {
                    $html = "<div class='mb-3'>" +
                        "<div class='row'>" +
                        "<div class='col-2'>" +
                        "<label for='title' class='form-label text-black lable_add_contact'>" + $name + "</label>" +
                        "<input type='hidden' name='" + $key + "[name]' value='" + $name + "' >" +
                        "<input type='hidden' name='" + $key + "[type]' value='" + $type + "'>" +
                        "<input class='contact_key' type='hidden' name='" + $key + "[contact_key]' value='" + $key + "'></input>" +
                        "<input type='hidden'  name='" + $key + "[add]'></input>" +
                        "</div>" +
                        "<div class='col-10'>" +
                        "<input type='file' class='form-control upload_image'name='" + $key + "[value]'>" +
                        "</div>" +
                        "</div>" +
                        "</div>";
                } else if ($type == 'texteditor') {
                    $html =
                        "<div class='mb-3'>" +
                        "<div class='row'>" +
                        "<div class='col-2'>" +
                        "<label for='title' class='form-label text-black lable_add_contact'>" + $name + "</label>" +
                        "<input type='hidden' name='" + $key + "[name]' value='" + $name + "' >" +
                        "<input type='hidden' name='" + $key + "[type]' value='" + $type + "'>" +
                        "<input class='contact_key' type='hidden' name='" + $key + "[contact_key]' value='" + $key + "'></input>" +
                        "<input type='hidden'  name='" + $key + "[add]'></input>" +
                        "</div>" +
                        "<div class='col-10'>" +
                        " <textarea class='summernote' name='" + $key + "[value]'></textarea>" +
                        "</div>" +
                        "</div>" +
                        "</div>";
                } else if ($type == 'textarea') {
                    $html = "<div class='mb-3'>" +
                        "<div class='row'>" +
                        "<div class='col-2'>" +
                        "<label for='title' class='form-label text-black lable_add_contact'>" + $name + "</label>" +
                        "<input type='hidden' name='" + $key + "[name]' value='" + $name + "' >" +
                        "<input type='hidden' name='" + $key + "[type]' value='" + $type + "'>" +
                        "<input class='contact_key' type='hidden' name='" + $key + "[contact_key]' value='" + $key + "'></input>" +
                        "<input type='hidden'  name='" + $key + "[add]'></input>" +
                        "</div>" +
                        "<div class='col-10'>" +
                        "<textarea class='form-control' name='" + $key + "[value]' id='description' rows='3' placeholder='Enter description'></textarea>" +
                        "</div>" +
                        "</div>" +
                        "</div>";
                }
            }

            $container.append($html);
            $('.summernote').summernote({
                placeholder: 'Enter Content',
                tabsize: 2,
                height: 100
            });
        }
    });

    $('.edit-field').change(function() {
        $key = $(this).closest('.row').find('.col-2 #contact_key').val();
        var $html = "<input type='hidden' name='" + $key + "[edit]'>";
        var $col2 = $(this).closest('.row').find('.col-2');
        if ($col2.find('input[name="' + $key + '[edit]"]').length === 0) {
            $col2.append($html);
        }
    });
});