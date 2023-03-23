


 
  
const yourText = $('.mx-nav').find('a, p');
$(window).on('scroll', function () {
  const headerOffset = $('.mx-nav').offset().top;
  const breakPoint = 10;
  const defaultColor = 'black';
  if (headerOffset > breakPoint) {
    // you scroll down
    $(".mx-nav").css('background', '#000000');
  } else {
    // you are at the top of the page
    $(".mx-nav").css('background', 'transparent');
  }
});

// Payment script
var radios = document.querySelectorAll('input[type=radio][name="paymentSelect"]');
var knopka = document.getElementById('payment-button');
function changeHandler(event) {
   if ( this.value === 'paypal' ) {
    $('.payment-select.paypal').addClass('active');
    
knopka.outerHTML = `<div class="payment-button" id="payment-button">
<a href="/processPaypal" class="payment">Continue</a>
</div>`
    $('.payment-select.cards').removeClass('active');
   } else if ( this.value === 'cards' ) {
    $('.payment-select.paypal').removeClass('active');
    $('.payment-select.cards').addClass('active');
   }  
}

Array.prototype.forEach.call(radios, function(radio) {
   radio.addEventListener('change', changeHandler);
});

function correct(n) {
  if (n < 0) { throw "Negative value" }
  if (n <= 22) { return n }
  else {
    var sum = 0; var number = n
    while (number) { sum += number % 10; number = Math.floor(number / 10); }
  }
  return correct(sum)
}
function count_line(n1, n2) {
  var line = new Array(7).fill(0); line[3] = correct(n1 + n2)
  line[1] = correct(n1 + line[3])
  line[5] = correct(n2 + line[3])
  line[0] = correct(n1 + line[1])
  line[2] = correct(line[1] + line[3])
  line[4] = correct(line[3] + line[5])
  line[6] = correct(n2 + line[5])
  return line
}
function reversing() { document.getElementById("buttons").style.visibility = "visible"; document.getElementById("whole").style.display = "none"; }
function define_snow() {
 var all_array = ["point-03", "point-02", "point-01", "point-04", "point-05", "point-07", "point-06", "point-09", "point-08", "point-10", "point-15", "point-12", "point-13", "point-14", "point-11", "point-16", "point-20", "point-18", "point-19", "point-17", "point-21", "point-22", "point-25", "point-26", "point-23", "point-24", "point-29", "point-30", "point-27", "point-28", "point-31", "point-32", "point-33", "point-34", "point-35", "point-36", "point-37", "point-38", "point-39", "point-40", "point-41", "point-42", "point-43", "point-44", "point-45", "point-46", "point-47", "point-48", "point-49", "point-51", "point-52", "point-53", "point-54", "point-55", "point-56", "point-57", "point-58", "point-59", "point-60", "point-61", "point-62", "point-63", "point-64", "point-65", "point-66", "point-67", "point-68", "point-69", "point-70", "point-71", "point-72", "point-73", "point-74", "point-75", "point-76", "point-77", "point-78", "point-79", "point-80", "point-81", "point-82", "point-83", "point-84", "point-85", "point-86", "point-87",]

  const dateString = document.getElementById('title-schem').getAttribute('value'); // Здесь указывется дата
  const true_year = parseInt(dateString.split('-')[0]); const true_month = parseInt(dateString.split('-')[1]); const true_day = parseInt(dateString.split('-')[2]); 

  var temp = new Date(dateString); 
  var userTimezoneOffset = temp.getTimezoneOffset() * 60000; 
  const date = new Date(temp.getTime() - userTimezoneOffset); 
  const year = correct(true_year)

  const month = correct(true_month)
  const day = correct(true_day)
  var arr = []; arr.push(day, month, year, correct(day + month + year))
  arr.push(correct(arr[0] + arr[1] + arr[2] + arr[3]))
  arr.push(correct(arr[0] + arr[1]), correct(arr[1] + arr[2]), correct(arr[2] + arr[3]), correct(arr[3] + arr[0]))
  arr.push(correct(arr[3] + arr[4]), correct(arr[2] + arr[4]))
  arr.push(correct(arr[9] + arr[10]))
  arr.push(correct(arr[9] + arr[11]), correct(arr[10] + arr[11]))
  arr.push(correct(arr[0] + arr[4]))
  arr.push(correct(arr[1] + arr[4]))
  arr.push(correct(arr[0] + arr[14]))
  arr.push(correct(arr[1] + arr[15]))
  arr.push(correct(arr[3] + arr[9]))
  arr.push(correct(arr[2] + arr[10]))
  arr.push(correct(arr[4] + arr[14]))
  arr.push(correct(arr[4] + arr[15]))
  arr.push(correct(arr[5] + correct(arr[5] + arr[6] + arr[7] + arr[8])))
  arr.push(correct(arr[5] + arr[22]))
  arr.push(correct(arr[6] + correct(arr[5] + arr[6] + arr[7] + arr[8])))
  arr.push(correct(arr[6] + arr[24]))
  arr.push(correct(arr[7] + correct(arr[5] + arr[6] + arr[7] + arr[8])))
  arr.push(correct(arr[7] + arr[26]))
  arr.push(correct(arr[8] + correct(arr[5] + arr[6] + arr[7] + arr[8])))
  arr.push(correct(arr[8] + arr[28]))
  const final = arr.concat(count_line(arr[0], arr[5]), count_line(arr[5], arr[1]), count_line(arr[1], arr[6]), count_line(arr[6], arr[2]), count_line(arr[2], arr[7]), count_line(arr[7], arr[3]), count_line(arr[3], arr[8]), count_line(arr[8], arr[0]))
  var arrayLength = all_array.length; document.getElementById('purp-1').innerHTML = arr[0]
  document.getElementById('purp-2').innerHTML = arr[1]
  document.getElementById('purp-3').innerHTML = correct(arr[0] + arr[1])
  document.getElementById('blue-1').innerHTML = arr[16]
  document.getElementById('blue-2').innerHTML = arr[17]
  document.getElementById('blue-3').innerHTML = correct(arr[16] + arr[17])
  document.getElementById('cyan-1').innerHTML = arr[14]
  document.getElementById('cyan-2').innerHTML = arr[15]
  document.getElementById('cyan-3').innerHTML = correct(arr[14] + arr[15])
  document.getElementById('green-1').innerHTML = arr[20]
  document.getElementById('green-2').innerHTML = arr[21]
  document.getElementById('green-3').innerHTML = correct(arr[20] + arr[21])
  document.getElementById('yellow-1').innerHTML = arr[4]
  document.getElementById('yellow-2').innerHTML = arr[4]
  document.getElementById('yellow-3').innerHTML = correct(arr[4] + arr[4])
  document.getElementById('orange-1').innerHTML = arr[10]
  document.getElementById('orange-2').innerHTML = arr[9]
  document.getElementById('orange-3').innerHTML = correct(arr[10] + arr[9])
  document.getElementById('red-1').innerHTML = arr[2]
  document.getElementById('red-2').innerHTML = arr[3]
  document.getElementById('red-3').innerHTML = correct(arr[2] + arr[3])
  document.getElementById('total-1').innerHTML = correct(arr[0] + arr[16] + arr[14] + arr[20] + arr[4] + arr[10] + arr[2])
  document.getElementById('total-2').innerHTML = correct(arr[1] + arr[17] + arr[15] + arr[21] + arr[4] + arr[9] + arr[3])
  document.getElementById('total-3').innerHTML = correct(correct(arr[0] + arr[1]) + correct(arr[16] + arr[17]) + correct(arr[14] + arr[15]) + correct(arr[20] + arr[21]) + correct(arr[4] + arr[4]) + correct(arr[10] + arr[9]) + correct(arr[2] + arr[3]))
  document.getElementById('nebo1').innerHTML = correct(arr[1] + arr[3])
  document.getElementById('zemlia1').innerHTML = correct(arr[0] + arr[2])
  document.getElementById('for_self1').innerHTML = correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2]))
  document.getElementById('for_self11').innerHTML = correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2]))
 

  document.getElementById('male1').innerHTML = correct(arr[5] + arr[7])
  document.getElementById('female1').innerHTML = correct(arr[6] + arr[8])
  document.getElementById('socium1').innerHTML = correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8]))
  document.getElementById('socium11').innerHTML = correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8]))

document.getElementById('duhovnoe1').innerHTML = correct(correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2])) + correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8])))
document.getElementById('spiritual_11').innerHTML = correct(correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2])) + correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8])))


document.getElementById('planetarnoe1').innerHTML = correct(correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8])) + correct(correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2])) + correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8]))))
document.getElementById('planetary_11').innerHTML = correct(correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8])) + correct(correct(correct(arr[1] + arr[3]) + correct(arr[0] + arr[2])) + correct(correct(arr[5] + arr[7]) + correct(arr[6] + arr[8]))))

let destiny = [];
fetch('https://matrixfate.com/api/destiny')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
     destiny = data.matrixes;
     destiny.forEach(element=>{
      if(element.number == document.getElementById('for_self11').innerHTML){
          document.getElementById('for_self11_title').innerHTML = element.energy_name
          document.getElementById('for_self11_text').innerHTML = element.personal_destiny
      }
  })
  destiny.forEach(element=>{
    if(element.number == document.getElementById('socium11').innerHTML){
        document.getElementById('socium11_energy').innerHTML = element.energy_name
        document.getElementById('socium11_text').innerHTML = element.social_destiny
    }
})
  destiny.forEach(element=>{
    if(element.number == document.getElementById('spiritual_11').innerHTML){
        document.getElementById('spiritual_11_energy').innerHTML = element.energy_name
        document.getElementById('spiritual_11_text').innerHTML = element.spiritual_destiny
    }
})
  destiny.forEach(element=>{
    if(element.number == document.getElementById('planetary_11').innerHTML){
        document.getElementById('planetary_11_energy').innerHTML = element.energy_name
        document.getElementById('planetary_11_text').innerHTML = element.planetary_destiny
    }
})
  });
var today = new Date()
  const weekday = ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"]; document.getElementById('date').innerHTML = '&nbsp;' + true_day + '/' + true_month + '/' + true_year
  document.getElementById('age').innerHTML = '&nbsp;' + Math.floor((today - date) / (1000 * 60 * 60 * 24 * 365))
  document.getElementById('weekday').innerHTML = weekday[date.getDay()]; document.getElementById('m3').innerHTML = arr[5] + ', ' + arr[7] + ', ' + correct(arr[5] + arr[7])
  document.getElementById('w3').innerHTML = arr[6] + ', ' + arr[8] + ', ' + correct(arr[6] + arr[8])
  document.getElementById('power_root').innerHTML = correct(arr[5] + arr[6] + arr[7] + arr[8])
  document.getElementById('power_inner').innerHTML = correct(arr[4]) + ', ' + correct(arr[5] + arr[6] + arr[7] + arr[8]) + ', ' + correct(correct(arr[4]) + correct(arr[5] + arr[6] + arr[7] + arr[8]))
  let personal = [];
fetch('https://matrixfate.com/api/personal')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    personal = data;
    for (var i = 0; i < arrayLength; i++) { 
      if(all_array[i] == "point-01"){
        document.getElementById("point-011").innerHTML = final[i]; 
        personal.matrixes.forEach(element => {
          if(element.number == final[i]){
            document.getElementById('text-title-content-paiddesc').innerHTML = element.energy_name;
            document.getElementById('text-1-paiddesc-011').innerHTML = element.text
            document.getElementById('podazdel-1-paiddesc-011').innerHTML = element.pod_1
            document.getElementById('podazdel-2-paiddesc-011').innerHTML = element.pod_2
            document.getElementById('podazdel-3-paiddesc-011').innerHTML = element.pod_3
            document.getElementById('podazdel-4-paiddesc-011').innerHTML = element.pod_4
          }
        });
      }
      if(all_array[i] == 'point-10'){
          document.getElementById("point-100").innerHTML = final[i]; 
      }
      if(all_array[i] == 'point-11'){
          document.getElementById("point-1111").innerHTML = final[i]; 
      }
      if(all_array[i] == 'point-14'){
          document.getElementById("point-1144").innerHTML = final[i]; 
      }
      if(all_array[i] == 'point-12'){
          document.getElementById("point-1222").innerHTML = final[i]; 
      }
      if(all_array[i] == 'point-05'){
          document.getElementById("point-0555").innerHTML = final[i]; 
      }
      if(all_array[i] == 'point-19'){
          document.getElementById("point-199").innerHTML = final[i]; 
      }
      if(all_array[i] == 'point-04'){
          document.getElementById("point-0444").innerHTML = final[i]; 
      }
      if(all_array[i] == 'point-18'){
          document.getElementById("point-talent2").innerHTML = final[i]; 
      }
      if(all_array[i] == 'point-16'){
          document.getElementById("point-talent3").innerHTML = final[i]; 
      }
  
      if(all_array[i] == "point-02"){
          document.getElementById("point-022").innerHTML = final[i]; 
          document.getElementById('point-talent').innerHTML = final[i]
          personal.matrixes.forEach(element => {
            if(element.number == final[i]){
              document.getElementById('text-title-content-paiddesc').innerHTML = element.energy_name;
              document.getElementById('text-2-paiddesc-022').innerHTML = element.text
              document.getElementById('podazdel-5-paiddesc-022').innerHTML = element.pod_1
              document.getElementById('podazdel-6-paiddesc-022').innerHTML = element.pod_2
              document.getElementById('podazdel-7-paiddesc-022').innerHTML = element.pod_3
              document.getElementById('podazdel-8-paiddesc-022').innerHTML = element.pod_4
            }
          });
        }
      document.getElementById(all_array[i]).innerHTML = final[i]
        if(all_array[i] == "point-14"){
        document.getElementById(all_array[i]).innerHTML = final[i] + 12
      }
      if(all_array[i] == "point-21"){
        document.getElementById(all_array[i]).innerHTML = final[i] + 3
      }
      if(all_array[i] == "point-13" || all_array[i] == "point-12"){
        document.getElementById(all_array[i]).innerHTML = final[i] -3
      }
     }

    }
    );
    let karma = [];
fetch('https://matrixfate.com/api/karma')
      .then((response) => {
        return response.json();
      })
      .then((data) => {
         karma = data.matrixes;
           karma.forEach(element=>{
          if(document.getElementById("point-100").innerHTML == element.first_number && document.getElementById("point-199").innerHTML== element.second_number && document.getElementById("point-0444").innerHTML == element.third_number){
              document.getElementById("point-previous-life").innerHTML = element.in_previous_life
              document.getElementById("point-present-life").innerHTML = element.in_present_life
              document.getElementById('point-recomendation-carma').innerHTML = element.less_and_rec
          }
         });
      });
      let comfort = [];
 fetch('https://matrixfate.com/api/comfort')
        .then((response) => {
          return response.json();
        })
        .then((data) => {
          comfort = data.matrixes;
          comfort.forEach(element=>{
            if(document.getElementById('point-0555').innerHTML == element.number){
                document.getElementById('point-0555-energy').innerHTML = element.energy_name;
                document.getElementById('point-0555-text').innerHTML = element.text;
            }
           })
 });

 let money = [];
 fetch('https://matrixfate.com/api/money')
        .then((response) => {
          return response.json();
        })
        .then((data) => {
            money = data.matrixes;
          money.forEach(element=>{
            if(document.getElementById('point-11').innerHTML == element.number){
                document.getElementById('point-1111-title').innerHTML = element.energy_name;
                document.getElementById("point-1111-text").innerHTML = element.text;
                document.getElementById("point-1111-2text").innerHTML = element.pod_1;
                document.getElementById('point-1111-dopolnenie').innerHTML = element.dopolnenie;
            }
            if(document.getElementById('point-14').innerHTML == element.number){
                document.getElementById('point-1144_energy').innerHTML = element.energy_name;
                document.getElementById("point-1144_text").innerHTML = element.text;
                document.getElementById("point-1144-podrozdel").innerHTML = element.pod_1;
            }
        
            if(document.getElementById('point-12').innerHTML == element.number){
                document.getElementById('point-1222-energy').innerHTML = element.energy_name;
                document.getElementById("point-1222-text").innerHTML = element.text;
                document.getElementById("point-1222-podrozdel").innerHTML = element.pod_1;
            }
           })
        
 });
 let talents = [];
 fetch('https://matrixfate.com/api/talents')
        .then((response) => {
          return response.json();
        })
        .then((data) => {
            talents = data.matrixes;
          return talents.forEach(element=>{
            if(document.getElementById('point-02').innerHTML == element.number){
                document.getElementById('point-talent-energy').innerHTML = element.energy_name;
                document.getElementById('point-talent-text').innerHTML = element.text;
                document.getElementById('point-talent-podrozdel').innerHTML = element.pod_1
        }
        if(document.getElementById('point-talent2').innerHTML == element.number){
            document.getElementById('point-talent-energy2').innerHTML = element.energy_name;
            document.getElementById('point-talent-text2').innerHTML = element.text;
            document.getElementById('point-talent-podrozdel2').innerHTML = element.pod_1
        }
        if(document.getElementById('point-talent3').innerHTML == element.number){
            document.getElementById('point-talent-energy3').innerHTML = element.energy_name;
            document.getElementById('point-talent-text3').innerHTML = element.text;
            document.getElementById('point-talent-podrozdel3').innerHTML = element.pod_1
        }
           })
 });
 

  
  return true
};


