$(function () {
    dodajNovogVozaca();
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