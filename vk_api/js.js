let m_selector = document.getElementsByClassName('methods_select')[0];
let paramsBlock = document.getElementsByClassName('params')[0];
let fieldsBlock = document.getElementsByClassName('fields')[0];

m_selector.addEventListener('change', ChangeMethod)

function ChangeMethod() {
    // console.log(m_selector);
    paramsBlock.innerHTML = 
    '<div class="line" name="user_ids" reqired="true"><div class="param">access_token: <input name="access_token" value="bfed9fa1bfed9fa1bfed9fa10dbcf99d8fbbfedbfed9fa1dbb076e664ea8f987ca6a7f7"></div></div>'

    fieldsBlock.innerHTML = '';

    let method = methodList[m_selector.value]
    
    for(let i in method){
        let atts = {};
        atts.class = 'line';
        atts.name = i;
        
        
        if (method[i].type == 'checkbox'){
            atts.innerHTML = '<div class="param">'+i+': <button name="'+i+'" onclick=CheckAll(this)> Clear </button> <button onclick=UnCheckAll(this)> All </button> </div>'
            atts.class = 'line checkbox_line'
            let attsBlock = createEl(atts);

            for (let n in method[i].value){
                let checkboxDiv = createEl({class:'param',
                    innerHTML: method[i].value[n] + '<input type="checkbox" name='+method[i].value[n]+' value='+method[i].value[n]+'>'})
                
                attsBlock.appendChild( checkboxDiv )
                paramsBlock.appendChild( attsBlock );
            }
        }else{
            if (method[i].reqired) {
                atts.innerHTML = '<div class="param">'+i+': <input name='+i+'></div>';
                atts.reqired = true;
                paramsBlock.appendChild( createEl(atts) );
            }else{
                fieldsBlock.appendChild( createEl({class:'field', innerHTML: i+' <button onclick=AddField(this) >+</button>' }) );
            }
        }
    }
}
function createEl(atts, type) {
    if(!type){ type = 'div' }
    let div = document.createElement(type);

    for (i in atts){
        if(i == 'innerHTML'){
            div[i] = atts[i]
        }else{
            div.setAttribute(i, atts[i])
        }
    }
    return div
}
function CheckAll(el){
    let parent = el.parentNode.parentNode;
    for(let i=0; parent.childNodes[i]; i++){
        parent.childNodes[i].childNodes[1].checked = false
    }
}
function UnCheckAll(el){
    let parent = el.parentNode.parentNode;
    for(let i=0; parent.childNodes[i]; i++){
        parent.childNodes[i].childNodes[1].checked = true
    }
}


function AddField(el) {
    let name = el.parentNode.childNodes[0].textContent
    
    paramsBlock.appendChild( 
        createEl({
            class: 'line',
            name: name,
            innerHTML: '<div class="param">'+name+': <input name='+name+'> <button onclick=DeleteField(this)>-</button></div>'
        }) 
    );
}
function DeleteField(el) {
    el.parentNode.parentNode.outerHTML = ''
}
const methodList = {
    'users.get':{
        user_ids: {reqired:true, type:'string'},
        fields: {
            reqired:true, type:'checkbox',
            value: ['activities', 'about', 'blacklisted', 'blacklisted_by_me', 
            'books', 'bdate', 'can_be_invited_group', 'can_post', 
            'can_see_all_posts', 'can_see_audio', 'can_send_friend_request', 
            'can_write_private_message', 'career', 'connections', 
            'contacts', 'city', 'country', 'crop_photo', 'domain', 'education', 
            'exports', 'followers_count', 'friend_status', 'has_photo', 
            'has_mobile', 'home_town', 'photo_100', 'photo_200', 'photo_200_orig', 
            'photo_400_orig', 'photo_50', 'sex', 'site', 'schools', 'screen_name', 
            'status', 'verified', 'games', 'interests', 'is_favorite', 'is_friend', 
            'is_hidden_from_feed', 'last_seen', 'maiden_name', 'military', 'movies', 
            'music', 'nickname', 'occupation', 'online', 'personal', 'photo_id', 
            'photo_max', 'photo_max_orig', 'quotes', 'relation', 'relatives', 
            'timezone', 'tv', 'universities']
        }
    },
    'groups.getById':{
        group_ids: {type:'string'},
        group_id: {type:'string'},
        fields: {
            reqired:true, type:'checkbox',
            value: ['activity', 'ban_info', 'can_post', 'can_see_all_posts', 'city',
            'contacts', 'counters', 'country', 'cover', 'description', 'finish_date',
            'fixed_post', 'links', 'market', 'members_count', 'place', 'site',
            'start_date', 'status', 'verified', 'wiki_page']
        }        
    },
    'groups.getMembers':{
        group_id: {type:'string', reqired: true},
        offset: {type:'string'},
        count: {type:'string'},
        fields: {
            reqired:true, type:'checkbox',
            value: ['bdate','can_post','can_see_all_posts','can_see_audio',
            'can_write_private_message','city','common_count','connections',
            'contacts','country','domain','education','has_mobile','last_seen',
            'lists','online','online_mobile','photo_100','photo_200','photo_200_orig',
            'photo_400_orig','photo_50','photo_max','photo_max_orig','relation',
            'relatives', 'schools','sex','site','status','universities']
        }
    },
    'wall.get':{
        owner_id: {type:'string'},
        domain: {type:'string'},
        offset: {type:'string'},
        count: {type:'string'},
    },
    'wall.search':{
        owner_id: {type:'string'},
        domain: {type:'string'},
        query: {type:'string'},
        owners_only: {reqired:true, type:'checkbox',value:[1]},
        count: {type:'string'},
        offset: {type:'string'},
    },
}

function SendRequest() {
    let select = document.getElementsByClassName('methods_select')[0]
    let lines = document.getElementsByClassName('line')
    let params = {v:'5.131', callback:'callbackFunc'}

    for (let i=0; i < lines.length; i++){
        if(lines[i].classList.contains('checkbox_line')){
            let checkboxes  = lines[i].childNodes;
            let cbVals = []
            for(let j=1; j<checkboxes.length; j++){
                if(checkboxes[j].childNodes[1].checked){
                    cbVals.push(checkboxes[j].childNodes[1].getAttribute('name'))
                }
            }
            params[lines[i].childNodes[0].childNodes[1].getAttribute('name')] = 
            cbVals.toString();
        }else{
            params[lines[i].childNodes[0].childNodes[1].getAttribute('name')] = 
            lines[i].childNodes[0].childNodes[1].value
        }
    }
    VKRequestConstructor(select.value, params)
}


function VKRequestConstructor(method, params){
    let script = document.createElement('SCRIPT');

    let requestString = '';
    for (let param in params){
        if(params[param] === ''){continue}
        requestString += param +'='+ params[param] +'&';
    }
    requestString = requestString.slice(0,-1)

    
    script.src = 'https://api.vk.com/method/'+method+'?'+requestString;
    document.getElementsByTagName("head")[0].appendChild(script);
    
}
function callbackFunc(result) {
    document.getElementsByClassName('output1')[0].value = JSON.stringify(result)
    document.getElementsByClassName('output2')[0].value = JSON.stringify(result)
    document.getElementsByClassName('sort_select')[0].innerHTML = '';
    
    let select = document.getElementsByClassName('sort_select')[0];
    let options = {}
    for(let i in result.response){
        
        for(let j in result.response[i]){
            if(!options[j] ){
                options[j] = true;
                select.innerHTML += '<option>'+j+'</option>';
            }
        }
    }
}
//           RETURN
// callbackFunc({ "response":[{
//     "id":210700286,
//     "bdate":"21.9.1986",
//     "first_name":"Lindsey",
//     "last_name":"Stirling",
//     "can_access_closed":true,
//     "is_closed":false
// }]});

function SortOutput(el){
    let input = JSON.parse(document.getElementsByClassName('output1')[0].value).response;
    let output = [];
    for (let i=0; i < input.length; i++) {
        if(typeof input[i][el.value] == 'object'){
            JSON.stringify(output.push(input[i][el.value]))
        }else{
            output.push(input[i][el.value])
        }
    }
    
    if(el.value.search('photo')){
        document.getElementsByClassName('open_photo_button')[0].hidden = true
        document.getElementsByClassName('download_photo_button')[0].hidden = true
    }else{
        document.getElementsByClassName('open_photo_button')[0].hidden = false
        document.getElementsByClassName('download_photo_button')[0].hidden = false
    }

    document.getElementsByClassName('output2')[0].value = JSON.stringify(output)
}

function download(){

}
function openPhoto(){
    let fields = document.getElementsByClassName('fields')[0]
    let urls = document.getElementsByClassName('output2')[0].value;
    
    urls = urls.slice(2,-2)

    let urlsMassive = urls.split('","');

    fields.innerHTML = '';
    for(let i=0; i< urlsMassive.length; i++){
        fields.innerHTML += '<img onclick="downloadPhoto(this)" src="'+urlsMassive[i]+'">'
    }
}
function downloadPhoto(el){
    let canvas = document.createElement('canvas')
    canvas.width = el.width
    canvas.height = el.height
    let ctx = canvas.getContext('2d')
    ctx.drawImage(el,0,0)
    let base64 = canvas.toDataURL('image/png')
    let a = document.createElement('a')
    a.href = 'data:application/octet-stream;base64,'+base64;
    a.download = 'imageName.png'
    a.click()
}