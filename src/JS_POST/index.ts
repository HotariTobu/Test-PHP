/*const xhr = new XMLHttpRequest();
const answer = document.getElementById('answer') as HTMLInputElement;

// サーバからのデータ受信を行った際の動作
xhr.onload = (e) => {
    console.log(`${xhr.readyState} | ${xhr.status}`);

    // HTTPレスポンスが完了しており
    if (xhr.readyState === XMLHttpRequest.DONE) {
        // HTTPリクエストが成功(コード200)した場合
        if (xhr.status === 200) {
            const value = xhr.responseText;
            answer.value = value;
        }
    }
};

const createRequestQuery = <K, V>(pairs: Map<K, V>) => {
    const tokens = Array.from(pairs, pair => `${pair[0]}=${pair[1]}`);
    return tokens.join('&');
}

const arg1 = document.getElementById('arg1') as HTMLInputElement;
const arg2 = document.getElementById('arg2') as HTMLInputElement;

const button = document.getElementById('calc_button');
if (button !== null) {
    // 計算ボタンを押した際の動作
    button.onclick = () => {
        xhr.open('POST', 'sum.php');
        xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded; charset=UTF-8');
    
        // フォームに入力した値をリクエストとして設定
        const pairs = new Map([
            ['arg1', arg1.value],
            ['arg2', arg2.value],
        ]);
        const request = createRequestQuery(pairs);
        xhr.send(request);
    }
}*/

const ans = $('#ans');
$('#calc_button').on('click', () => {
    const query = $('#args').serialize();
    $.post('sum.php', query)
    .done(e => {
        const data = JSON.parse(e);
        if ('answer' in data) {
            ans.html(data.answer);
        }
    });
});