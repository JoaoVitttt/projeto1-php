const tbody = document.querySelector("tbody");

const descItem = document.querySelector("#desc");
const amount = document.querySelector("#amount");
const type = document.querySelector("#type");

const btnNew = document.querySelector("#btnNew");

const incomes = document.querySelector(".incomes");
const expenses = document.querySelector(".expenses");
const total = document.querySelector(".total");

let items;

btnNew.onclick = () => {
  if (descItem.value === "" || amount.value === "" || type.value === "") {
    return alert("Preencha todos os campos!");
  }

  items.push({
    desc: descItem.value,
    amount: Math.abs(amount.value).toFixed(2),
    type: type.value,
  });

  setItensBD();

  loadItens();

  descItem.value = "";
  amount.value = "";
};

function deleteItem(index) {
  items.splice(index, 1);
  setItensBD();
  loadItens();
}

function insertItem(item, index) {
  let tr = document.createElement("tr");

  tr.innerHTML = `
    <td>${item.desc}</td>
    <td>R$ ${item.amount}</td>
    <td class="columnType">${
      item.type === "Entrada"
        ? '<i class="bx bxs-chevron-up-circle"></i>'
        : '<i class="bx bxs-chevron-down-circle"></i>'
    }</td>
    <td class="columnAction">
      <button onclick="deleteItem(${index})"><i class='bx bx-trash'></i></button>
    </td>
  `;

  tbody.appendChild(tr);
}

function loadItens() {
  items = getItensBD();
  tbody.innerHTML = "";
  items.forEach((item, index) => {
    insertItem(item, index);
  });

  getTotals();
}

function getTotals() {
  const amountIncomes = items
    .filter((item) => item.type === "Entrada")
    .map((transaction) => Number(transaction.amount));

  const amountExpenses = items
    .filter((item) => item.type === "Saída")
    .map((transaction) => Number(transaction.amount));

  const totalIncomes = amountIncomes
    .reduce((acc, cur) => acc + cur, 0)
    .toFixed(2);

  const totalExpenses = Math.abs(
    amountExpenses.reduce((acc, cur) => acc + cur, 0)
  ).toFixed(2);

  const totalItems = (totalIncomes - totalExpenses).toFixed(2);

  incomes.innerHTML = totalIncomes;
  expenses.innerHTML = totalExpenses;
  total.innerHTML = totalItems;
}

const getItensBD = () => JSON.parse(localStorage.getItem("db_items")) ?? [];
const setItensBD = () =>
  localStorage.setItem("db_items", JSON.stringify(items));

loadItens();


/* ---------------- CHART ---------------- */
// BAR CHART
var barChartOptions = {
    series: [
    {
        name: 'Total',
        data: [4000, 3330, 4498, 7470, 5040, 5810, 6900, 11000, 12000, 13080, 15000, 16920]
    }, {
        name: 'Dívida',
        data: [400, 4300, 80, 700, 540, 5800, 90, 1100, 120, 380, 500, 15020]
    }, {
        name: 'Entrada',
        data: [2000, 2000, 2000, 2800, 3100, 2000, 3800, 3000, 2000, 4000, 4000, 3080]
    }, {
        name: 'Saída',
        data: [800, 4300, 50, 7000, 500, 800, 690, 1100, 1500, 3580, 5500, 50000]
    }],
    chart: {
    type: 'bar',
    height: 350,
    toolbar:{
        show: false,
    },
    },
    colors: [
        '#246dec',
        '#cc3c43',
        '#367952',
        '#f5b74f',
    ],
    plotOptions: {
        bar: {
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded',
        },
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true,
        width: 2,
        colors: ['transparent']
    },
    xaxis: {
        categories: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        labels: {
            style: {
                colors: "#000000",
            },
        },
    },
    yaxis: {
        title: {
            text: '$ (thousands)',
            style: {
                color: '#000000',
            },
        },
        labels: {
            style: {
                colors: '#000000',
            },
        },
    },
};

var barChart = new ApexCharts(document.querySelector("#bar-chart"), barChartOptions);
barChart.render();

// Area CHART -- Purchase and Sales Orders

var areaChartOptions = {
    series: [{
    name: 'Entrada',
    data: [2000, 2000, 2000, 2800, 3100, 2000, 3800, 3000, 2000, 4000, 4000, 3080]
  }, {
    name: 'Saída',
    data: [800, 4300, 50, 7000, 500, 800, 690, 1100, 1500, 3580, 5500, 50000]
  }],
    chart: {
    height: 350,
    type: 'area',
    toolbar: {
        show: false,
    },
  },
  colors: ["#367952", "#f5b74f"],
  dataLabels: {
    enabled: false,
  },
  stroke: {
    curve: 'smooth'
  },
  labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
  markers: {
    size: 0
  },
  yaxis: [
    {
      title: {
        text: 'Purchase Orders',
      },
    },
    {
      opposite: true,
      title: {
        text: 'SALES Orders',
      },
    },
  ],
  tooltip: {
    shared: true,
    intersect: false,
  }
};

  var areaChart = new ApexCharts(document.querySelector("#area-chart"), areaChartOptions);
  areaChart.render();
