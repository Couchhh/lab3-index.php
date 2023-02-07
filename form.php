<!DOCTYPE html>
<html lang="eng">

  <head>
    <meta charset="UTF-8">
    <meta name="author" content="Sophia Palma">
    <meta name="description" content="Form!">
    <Title> FORM </Title>
  </head>

  <body style="background-color:#D3D3D3">

    <body>
      <h1> Favorite Sea Creature! </h1>
      <nav>
        <a href="https://spalma1.w3.uvm.edu/cs008/">Home</a>
        <a href="index.php">Fishing is Bad</a>
      </nav>
      <main>
        <section>
          <?php
            print '<p>Post Array:</p><pre>';
            print_r($Post);
            print '</pre>'
            ?>
          <form action='#' method="POST">
        </section>
        <section>
        <fieldset>
          <legend>contact information</legend>
          <p>
            <label for="first">First Name:</label>
            <input type="text" name="first" id="first">
          </p>
          <p>
            <label for="last">Last Name:</label>
            <input type="text" name="last" id="last">
          </p>
          <p>
            <label for="email">Email:</label>
            <input type="text" name="eamil" id="email">
          </p>
        </fieldset>
        <fieldset>
          <legend>What is your favorite sea creature?</legend>
          <p>
            <div>
              <input type="radio" name="sea creature" value="Shark" id="shar">
              <label for="shar">Shark</label>
            </div>
            <div>
              <input type="radio" name="sea creature" value="Whale" id="wha">
              <label for="wha">Whale</label>
            </div>
            <div>
              <input type="radio" name="sea creature" value="Sea turtle" id="sea">
              <label for="sea">Sea Turtle</label>
            </div>
            <div>
              <input type="radio" name="sea creature" value="tropical fish" id="fis">
              <label for="fis">Tropical Fish</label>
            </div>
            <div>
              <input type="radio" name="sea creature" value="sea cucumber" id="cuc">
              <label for="cuc">Sea Cucumber</label>
            </div>
          </p>
        </fieldset>
        <fieldset>
          <legend> Choose your favorite ocean activity</legend>
          <p>
            <label for="fishing">Fishing:</label>
            <input type="checkbox" name="fishing" id="fishing">
          </p>
          <p>
            <label for="waterskiing">Water Skiing:</label>
            <input type="checkbox" name="waterskiing" id="waterskiing">
          </p>
          <p>
            <label for="snorkeling">Snorkeling:</label>
            <input type="checkbox" name="snorkeling" id="snorkeling">
          </p>
          <p>
            <label for="tubing">Tubing:</label>
            <input type="checkbox" name="tubing" id="tubing">
          </p>
          <p>
            <label for="Nothing">Nothing, I'm boring:</label>
            <input type="checkbox" name="Nothing" id="Nothing">
          </p>
        </fieldset>
        <fieldset>
        <p>
        <input type="submit">
        </p> 
        </fieldset>
    </form>
    <section>
      </main>
    </body>
    </html>

