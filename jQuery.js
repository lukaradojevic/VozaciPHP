$(function () {
    dodajNovogVozaca();
    obrisiVozaca();
    updateVozaca();
});


function dodajNovogVozaca() {

    $(document).on('click', '#button-novi-vozac', function () {

        var imeprezime = $('#imeprezime').val();
        var godine = $('#godine').val();
        var drzava = $('#drzava').val();
        var titule = $('#titule').val();
        var tim = $('#tim').val();

        $.ajax(
            {
                url: 'dodajVozaca.php',
                method: 'post',
                data: { P_imeprezime: imeprezime, P_godine: godine, P_drzava: drzava, P_titule: titule, P_tim: tim },

                success: function () {
                    alert('Novi vozač sačuvan u bazi!')
                    window.location.replace('index.html');
                }
            });

    })
}

function obrisiVozaca() {

    $(document).on('click', '#dugme-brisanje', function () {

        var id = $(this).val();

        $.ajax({
            url: 'obrisiVozaca.php',
            method: 'post',
            data: { P_id: id },

            success: function () {
                alert('Vozač je obrisan!');
                window.location.reload();
            }
        })

    })
}


function updateVozaca() {

    $(document).on('click', '#button-edit-vozac', function () {

        var id = $(this).val();
        var imeprezime = $('#imeprezime').val();
        var godine = $('#godine').val();
        var drzava = $('#drzava').val();
        var titule = $('#titule').val();
        var tim = $('#tim').val();

        $.ajax({
            url: 'updateVozaca.php',
            method: 'post',
            data: {
                P_id: id,
                P_imeprezime: imeprezime,
                P_godine: godine,
                P_drzava: drzava,
                P_titule: titule,
                P_tim: tim,
            },

            success: function () {
                alert('Vozač je izmenjen!');
                window.location.replace('sviVozaci.php');
            }
        })
    });
}