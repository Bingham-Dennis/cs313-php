function loadTime() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('time').innerHTML = new Date(parseInt(this.responseText) * 1000);
    }
  };
  xhttp.open("GET", "./getTime.php", true);
  xhttp.send();
}

/******************************************************************************
 *  Add list Items
 * This function will add the navigation links to the lists
 *****************************************************************************/
function addListItems() {
  // create the array of items in the lists
  let listItems1 = [
    'Shopping Cart',
    'DB Setup',
    'DB Access',
    'DB Update',
    'Project 1 Completion',
    'Hello World',
    'Postal Rate Calculator',
    'Milestone 1',
    'Milestone 2',
    'Milestone 3',
    'Project Self Assessment'
  ];

  let listItems2 = [
    'Week 2',
    'Week 3',
    'Week 4',
    'Week 5',
    'Week 6',
    'Week 7',
    'Week 8',
    'Week 9',
    'Week 10',
    'Week 11',
    'Week 12',
    'Week 13'
  ];

  // loop over the array using a for each loop.
  listItems1.forEach((item) => {
      // create a list item element.
      let li = document.createElement('li');

      //create an anchor tag element.
      let a = document.createElement('a');

      // add the text from the item we got from the array
      // to the anchor tag element we just created.
      a.innerHTML = item;

      // get the url and set it to the href attribute on
      // the anchor tag.
      a.setAttribute('href', getURL(item));

      // add the anchor tag to the list element wer created
      // earlier.
      li.appendChild(a);

      // add the list item to the un-ordered list with the
      // id nav_items.
      document.getElementById('list1').appendChild(li);
  });

  // loop over the array using a for each loop.
  listItems2.forEach((item) => {
    // create a list item element.
    let li = document.createElement('li');

    //create an anchor tag element.
    let a = document.createElement('a');

    // add the text from the item we got from the array
    // to the anchor tag element we just created.
    a.innerHTML = item;

    // get the url and set it to the href attribute on
    // the anchor tag.
    a.setAttribute('href', getURL(item));

    // add the anchor tag to the list element wer created
    // earlier.
    li.appendChild(a);

    // add the list item to the un-ordered list with the
    // id nav_items.
    document.getElementById('list2').appendChild(li);
});
}

/******************************************************************************
*  Get URL
* This function will return the correct URL based on the listItem or item
* since we pulled it out of the array in the for loop.
* @param: link
*****************************************************************************/
function getURL(link) {
  const items = [
    {
      name: 'Home',
      url: './index.php'
    },
    {
      name: 'Shopping Cart',
      url: '#'
    },
    {
      name: 'DB Setup',
      url: '#'
    },
    {
      name: 'DB Access',
      url: '#'
    },
    {
      name: 'DB Update',
      url: '#'
    },
    {
      name: 'Project 1 Completion',
      url: '#'
    },
    {
      name: 'Hello World',
      url: '#'
    },
    {
      name: 'Postal Rate Calculator',
      url: '#'
    },
    {
      name: 'Milestone 1',
      url: '#'
    },
    {
      name: 'Milestone 2',
      url: '#'
    },
    {
      name: 'Milestone 3',
      url: '#'
    },
    {
      name: 'Project Self Assessment',
      url: '#'
    },
    {
      name: 'Week 2',
      url: '../Team_Assignment/index.html'
    },
    {
      name: 'Week 3',
      url: './week3/team_assignment.php'
    },
    {
      name: 'Week 4',
      url: '#'
    },
    {
      name: 'Week 5',
      url: '#'
    },
    {
      name: 'Week 6',
      url: '#'
    },
    {
      name: 'Week 7',
      url: '#'
    },
    {
      name: 'Week 8',
      url: '#'
    },
    {
      name: 'Week 9',
      url: '#'
    },
    {
      name: 'Week 10',
      url: '#'
    },
    {
      name: 'Week 11',
      url: '#'
    },
    {
      name: 'Week 12',
      url: '#'
    },
    {
      name: 'Week 13',
      url: '#'
    }
  ];

  // loop over items and find the correct item and then return the url for that
  // item
  const result = items.find( item => item.name === link);
  return result.url;
}
