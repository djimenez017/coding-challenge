# coding-challenge

1.  How can you switch a css style when the screen size is below a certain size?

        I would use media queries to switch a css style when the screen size is a certain size. For example
        I use media queries when i have to design responsive layouts.

For example:
In the example below, as long as the width is less than 300px then the flex-direction column and background will take place.

    body {
        display: flex;
        background: white;
    }

    @media device (max-width: 300px) {
        flex-direction: column;
        background: grey;
    }

2.  What is the benefit of using stylesheets instead of inline styles?

        The benefit of using stylesheets is code consistency and cleanliness. For example if you want to style a button it you can create a class and assign it to every button rather than copy/paste the same style for every button. Other than just adding classes it would make the code easier to read and to follow along for another developer. Other than consistency and cleanliness it is much easier to troubleshoot, you can edit one class instead of making changes to multiple elements, which can at the end of the day save time.

3.  Is there a way to manage CSS with variables and functions?

        Yes there is.
        I use css variable to deal with styling, rather than remembering a hex color code, you can do something like this:

        html {
            --backgroundColor: white;
            --textColor: red;
        }

        Then i can apply the variables using the var() function

        body{
            background: var(--backgroundColor);
            color: var(--textColor);
        }

4.  Review and update the following erroneous CSS:

        **See cssChallenge.html**

    These are the updtes i would do to the code.

        position: relative was missing semicolon

        padding-front this does not exist just padding left, right, top, bottom

        bgcolor: red should probably be a variable, or add background-color: red to change to background color of the button.

        font-color: #fZb034;  should be color, font-color does not exist

        text-transform was missing semicolon ;

        line-height. 20px;  had a period . instead of a colon :

        transition: color 0.2s ease-in-out;
        Does not epecify what color it should be, it nis not set up properly. Need a hover state mabe to trigger the change of color

        #FZB034 is not a color

JAVASCRIPT

1.  What’s the difference between the following three “car” approaches?

        function Car(){}
        This is a function in Javascript called Car. These are not executed immeidately unless called.
        var car = Car();
        Assigning a function to a variable creates a reference to the Car function. You can use the variable to run the expression.
        var car = new Car();
        New Car() would create a new instance of the Car object.

2.  Explain what AJAX is and it’s advantages/disadvantages.

        AJAX (Asynchronus Javascript and XML) is used to exchange data with servers/databases and update portions of a site without refreshing the page.
            Advantages:
                - Speed since AJAX is able to exchange data with server/databases without reloading the page the reuqest are quick and update quick, without sending the entire page to the server. Also by sennding just the required data it imporoves the overall performance.
            Disadvantages:
                - Search engines cannot crawl AJAX pages since the updates to the content can be instantaneous. Would not be a good idea to use AJAX if you want your site to rank good in SEO. aLSO IS javascript is disables the AJAX is not able to make the calls.

3.  Describe how event bubbling works in the context of clicking on the “Hello World” text:

    "<body>
    <div id=”container”>
    <span id=”textContainer”>Hello World</span>
    </div>
    </body>"

        If we click on the span that contains the word "Hello World" it would create a click event on the span that would rise to the parent div, then the grandparent body, and then to the HTML node, then the Document and ultimately the Window.

4.  Create a loop that iterates up to 100 while outputting "fizz" at multiples of 3, "buzz" at multiples of 5 and "fizzbuzz" at multiples of 3 and 5.

        See javascriptChallenge.html

5.  Please fix the following erroneous JavaScript code.

Returns the header element.
@return {(object|null)} The JQuery header element or null if the element does not exist

function getHeaderElement() {

  <!-- Get header element by its id. header = $(“myHeader”); -->

if (header === null
&& TypeOf header === undefined
){
console.log(‘header element exists!”);
}
console.log(“
header element does not exist!
“))
return header
}

Changes:

    - change header to (":header") to get the header elements.
    - Switch the order of the console.logs
    - include an else inbetween the 2 console.log
    - Make the quotations in the console.log match
    - Fix multiple closing parenthesis.

    See Javascript challenge for changes

TWIG CHALLENGE
**See twigChallenge.html.twig && first.php**
