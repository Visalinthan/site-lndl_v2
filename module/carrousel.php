<div class="row bloc_2">
    <div class="line"></div>
    <div class="col-md-12 text">
        <h2>Ils nous font confiance ...</h2>
    </div>

    <div class="slider">
        <div class="prev">
            <i class="fa-solid fa-angle-left fa-4x"></i>
        </div>
        <div class="next">
            <i class="fa-solid fa-angle-right fa-4x"></i>
        </div>
        <div class="card active">
            <h3>Témoin 1</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum odio distinctio delectus sapiente.
                Nobis soluta neque expedita cumque sapiente ut numquam velit perferendis consequatur ab, eaque
                distinctio dignissimos commodi placeat.</p>
        </div>
        <div class="card">
            <h3>Témoin 2</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum odio distinctio delectus sapiente.
                Nobis soluta neque expedita cumque sapiente ut numquam velit perferendis consequatur ab, eaque
                distinctio dignissimos commodi placeat.</p>
        </div>
        <div class="card">
            <h3>Témoin 3</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nostrum odio distinctio delectus sapiente.
                Nobis soluta neque expedita cumque sapiente ut numquam velit perferendis consequatur ab, eaque
                distinctio dignissimos commodi placeat.</p>
        </div>


    </div>

    <button class="btn-simuler">Découvrir plus d'avis</button>
</div>

<script>

const items = document.querySelectorAll('.card');
const nbSlide = items.length;
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');
let count = 0;

function slideNext() {
    items[count].classList.remove('active');
    if (count < nbSlide - 1) {
        count++;
    } else {
        count = 0;
    }
    items[count].classList.add('active');
}

next.addEventListener('click', slideNext);

function slidePrev() {
    items[count].classList.remove('active');
    if (count > 0) {
        count--;
    } else {
        count = nbSlide - 1;
    }
    items[count].classList.add('active');
}

prev.addEventListener('click', slidePrev);

</script>