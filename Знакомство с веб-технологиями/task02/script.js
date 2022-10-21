// let a = 158;
// let b = 2;
// let result = a + b;
// alert(result);

//3

// let name = "Иван";
// alert(`Привет, ${name}`);

//4

// let name = prompt("Как вас зовут", " ");
// alert(`Привет, ${name}`);

//5

// let names = prompt("Как вас зовут", "Имя");
// function name() {
//   alert(`Привет, ${names}`);
// }
// name();

// let userName = 'Алевтина';
// function showMessage() {
//     let message = 'Привет, ' + userName;
//     alert(message);
// }
// showMessage(); // Привет, Алевтина

//6

// if (confirm("вы уверены?")) {
//   alert("Good");
// } else {
//   alert("Bad");
// }

// alert(confirm("вы уверены?") ? "Good" : "Bad");

//7

let age = prompt("Сколько вам лет?");

switch (age) {
  case "10":
    alert("Вам надо учить уроки!");
    break;
  case "30":
    alert("Ложитесь спать, завтра на работу");
    break;
  default:
    alert("Мы не знаем что Вам делать");
    break;
}

// switch (переменная) {
// 	case 'значение1':
// 		/*
// 			здесь код, который выполнится в случае,
// 			если переменная имеет значение1
// 		*/
// 	break;
// 	case 'значение2':
// 		/*
// 			здесь код, который выполнится в случае,
// 			если переменная имеет значение2
// 		*/
// 	break;
// 	case 'значение3':
// 		/*
// 			здесь код, который выполнится в случае,
// 			если переменная имеет значение3
// 		*/
// 	break;
// 	default:
// 		/*
// 			здесь код, который выполнится в случае,
// 			если не совпала ни с одним значением
// 		*/
// 	break;
// }
