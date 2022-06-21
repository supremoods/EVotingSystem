function profileContent() {
    let dropdown = document.querySelector('.profile_content');
    dropdown.classList.toggle('active');
}

function loadModal() {
    let loadModal = document.querySelector('.modal_load_wrapper');
    loadModal.classList.toggle('modal');
}

function loadContent(content) {
    window.location.href = content;
}

$('.logout').click(function () {
    $.ajax({
        url: '/facilitatorLogout',
        type: 'GET',
        success: function (data) {
            console.log(data);
            window.location.href = '/facilitator';
        },
        error: function (request, status, error) {
            console.log(request.responseText);
        } 
    });
});

