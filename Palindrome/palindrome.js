const input = document.getElementById('input')
const submit = document.getElementById('submit')
const result = document.getElementById('result')
submit.addEventListener('click', palindResult)
function palindResult(){
    let url
    let givenString= input.value
    if (givenString){
        result.textContent=''
        url='http://localhost/palindrome.php/?string='+givenString
        fetch(url)
            .then(res => res.json())
            .then(data => {
                //check if gender result is null
                if (data.palind){
                    result.textContent+= 'This word is a palindrome'
                }
                else{
                    result.textContent+= 'This word is not a palindrome'
                }      
        })
    }
}