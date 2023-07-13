const token = '6204551292:AAFnqZM11pDO8AWTX2katJSmpGa9RP9Ir1Y'

let messages = new Array;
fetcher('getUpdates').then((el)=>{ messages = el.result })


setInterval(() => {
  echo()
}, 6000);


async function echo(){
  
  let messagesNow = (await fetcher('getUpdates')).result

  for(let i = messages.length; i< messagesNow.length; i++){
    
    if(messagesNow[i].message.text.indexOf('/ip ') == 0){
      ipCheck(messagesNow[i].message.text).slice(3)
      return
    }

    fetcher('sendMessage?chat_id='+ messagesNow[i].message.chat.id +'&text=' +messagesNow[i].message.text)
  }
  messages = messagesNow;
}

async function fetcher(method){
  let response = await fetch('https://api.telegram.org/bot'+token+'/'+method)

  let result = await response.json()

  return result
}

async function ipCheck(ip){
  let response = await fetch('http://ip-api.com/json/'+ip)

  let result = await response.json()

  // return result
  document.writeln(JSON.stringify(result))
}
