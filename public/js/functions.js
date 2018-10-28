function refreshEditor( _idLanguage ) {
    $.ajax({
        url: window.location.href +  "/" + _idLanguage + "/get-language",
        success: function(response){
            var linguagem = response.response;
            renderLanguageTemplate(linguagem);
        }
    });
}


function renderLanguageTemplate(linguagem) {
    switch (linguagem.nome) {
        case "Kotlin":
            var KotlinMode = ace.require("ace/mode/kotlin").Mode;
            editor.session.setMode(new KotlinMode());

            editor.setValue("");

            var newTemplate = linguagem.template.replace(/<br>/g, '\n');
            editor.insert(newTemplate);

            break;
        case "Java":
            var JavaMode = ace.require("ace/mode/java").Mode;
            editor.session.setMode(new JavaMode());

            editor.setValue("");

            var newTemplate = linguagem.template.replace(/<br>/g, '\n');
            editor.insert(newTemplate);

            break;
        default: // C++
            var CppMode = ace.require("ace/mode/c_cpp").Mode;
            editor.session.setMode(new CppMode());

            editor.setValue("");

            var newTemplate = linguagem.template.replace(/<br>/g, '\n');
            editor.insert(newTemplate);
            break;
    }
}