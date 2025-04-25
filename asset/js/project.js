  function i(value) {
    if (n.value === "" && value === ".") {
      n.value = "0.";
    } else if (n.value === "0" && value !== ".") {
      n.value = value;
    } else if (value === ".") {
      if (!n.value.includes(".")) {
        n.value += value;
      }
    } else {
      n.value += value;
    }
  }

  function ce() {
    n.value = n.value.slice(0, n.value.length - 1);
  }

  function ac() {
    n.value = "";
  }

  function persen() {
    n.value = eval(n.value) / 100;
  }

  h.onclick = ha;
  function ha() {
    n.value = eval(n.value);
  }