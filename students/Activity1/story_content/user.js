function ExecuteScript()
{
  $.ajax(
    {
       url:"http://localhost/E-LMS/function/quiz.php", 

       data:{unId:strId, unQuizId:strQuizId, unType:strType, uneReponseCorrecte: strCorrectResponse, unStatut:strStatus, unPoint:nPoints, unPoids:nWeight, uneDescription:strDescription, uneReponse:strUserResponse, unNumeroQuestion:nQuestionNumber}, 

       type: 'GET',

       async:false;

    }
  )
}

