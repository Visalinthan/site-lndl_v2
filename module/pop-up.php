<style>
/*Pop up Help -- Pop up Help -- Pop up Help -- Pop up Help -- Pop up Help -- Pop up Help -- Pop up Help*/

#help-pop {
    position: fixed;
    bottom: 10px;
    right: 10px;
    max-width: 350px;
    z-index: 25;
    background-color: rgba(82, 139, 55, 0.8);
    color: #fff;
}

#help-pop.open {
    padding: 10px 10px 40px;
    border-radius: 15px;
}

#help-pop.close {
    padding: 15px 15px;
    border-radius: 50px;
    cursor: pointer;
    opacity:1;
}

#help-pop #pop-up-phone img{
    width: 40px;
}

#help-pop #pop-up-phone {
    display: none;
}

#help-pop .pop-up-contain {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

#help-pop .pop-up-contain h5 {
    margin: 25px 0px;
}

#help-pop .pop-up-contain img {
    width: 100px;
    border-radius: 100px;
    margin: 15px 0px;
}

#help-pop .pop-up-contain .call {
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 25px 0px;
    padding: 10px 15px;
    background-color: #F8A912;
    border-radius: 25px;
}

#help-pop .pop-up-contain .call a {
    padding-left: 10px;
    text-decoration: none;
    color: #fff;
    font-weight: 800;
    font-size: 2em;
}

.mention {
    margin-top: 100px;
    text-align: center;
}

.title-mention {
    background-color: #528B37;
    max-height: 120px;
    height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 180px;
}

.title-mention h1 {
    color: #fff;
    font-weight: 600;
}

.mention h2 {
    padding: 25px;
    color: #528B37;
}

.mention p {
    padding: 10px;
    font-style: italic;
    font-size: 1.1em;
}

.mention a {
    font-size: 1.1em;
    color: #528B37;
}
</style>


<div id="help-pop" class="open" data-aos='fade-up' data-aos-duration="2000">
    <div id="pop-up-phone">
        <img src="../assets/img/picto-footer/Phone.png" alt="lndl contacter">
    </div>

    <div id="pop-up-contact">
        <button id="close-pop" type="button" class="btn-close" aria-label="Close"></button>
        <div class="pop-up-contain">
            <h5>Vous avez besoin d'aide ?</h5>
            <p>Contactez l'un de nos conseillers.</p>
            <img src="../assets/img/assistant-contact.png" alt="lndl contacter">
            <div class="call">
                <i class="fas fa-phone-alt"></i>
                <a href="tel:0148551647">01 48 55 16 47</a>
            </div>
            <p>Du lundi au vendredi de 9h à 18h</p>
        </div>
    </div>
</div>

<script>
function closePopUp() {
    if ($("#help-pop").hasClass('open')) {
        $("#pop-up-phone").show();
        $("#pop-up-contact").hide();
        $("#help-pop").removeClass("open").addClass("close");
    }
}

function openPopUp() {
    if ($("#help-pop").hasClass('close')) {
        $("#pop-up-phone").hide("slow");
        $("#pop-up-contact").show("slow");
        $("#help-pop").removeClass("close").addClass("open");
    }
}

setTimeout(() => {
    closePopUp()
}, 10000);

$("#help-pop #close-pop").on('click', function() {
    closePopUp()
});
$("#pop-up-phone").on("mouseenter", function() {
    openPopUp();
});

if (window.matchMedia("(max-width: 992px)").matches) {

    closePopUp();
}
</script>