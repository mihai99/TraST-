<div class="main-container">
    <div class="intrebari-info">
        Intrebari totale
        Intrebarea curenta
    </div>
    <div class="intrebari-content">
        <div class="question">
            <h3>Intrebarea nr: x</h3>
            <p>'Intrebare'</p>
        </div>
        <form class="quiz-form">

            <input type="hidden" id="qID" value="0">

            <label for="optionA" class="unchecked" onclick="chooseAnswer(this)">
                Optiunea A
            </label>
            <input id="optionA" type="checkbox">

            <label for="optionB" class="unchecked" onclick="chooseAnswer(this)">
                Optiunea B
            </label>
            <input id="optionB" type="checkbox">

            <label for="optionC" class="unchecked" onclick="chooseAnswer(this)">
                Optiunea C
            </label>
            <input id="optionC" type="checkbox">

            <input type="submit" value="Verifica raspuns" id="submit-answer">
        </form>
    </div>
</div>