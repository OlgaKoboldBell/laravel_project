<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background: #98FB98; 
            color: #4B0082;
        }
        .accordion-item, h3{
            text-align: center;
            background: #98FB98;
        }
        </style>

</head>
<body>
  
    <div class="accordion" id="accordionExample">
    <h2 class="accordion-header" id="headingOne">Документація</h2>
    <p>  </p>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      GET<h3>/api/pricedetail</h3>
      </button>
    </h2>

    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <pre>
        {
        "id": 1,
        "name": "Заміна скла",
        "price": 700,
        "created_at": "2023-12-30T22:30:18.000000Z",
        "updated_at": "2023-12-30T22:30:18.000000Z"
    },
    {
        "id": 2,
        "name": "Установка Віндоуз",
        "price": 1000,
        "created_at": "2023-12-30T22:30:46.000000Z",
        "updated_at": "2023-12-30T22:30:46.000000Z"
    },
    {
        "id": 3,
        "name": "Ремонт вентиляторів",
        "price": 800,
        "created_at": "2023-12-30T22:28:57.000000Z",
        "updated_at": "2023-12-30T22:28:57.000000Z"
    },
    {
        "id": 4,
        "name": "Ремонт обігрівачів",
        "price": 700,
        "created_at": "2023-12-30T22:29:44.000000Z",
        "updated_at": "2023-12-30T22:29:44.000000Z"
    },
    {
        "id": 5,
        "name": "Ремонт зволожувачів повітря",
        "price": 800,
        "created_at": "2023-12-30T22:31:05.000000Z",
        "updated_at": "2023-12-30T22:31:05.000000Z"
    },
    {
        "id": 6,
        "name": "Ремонт кліматичних комплексів",
        "price": 1700,
        "created_at": "2023-12-30T22:31:30.000000Z",
        "updated_at": "2023-12-30T22:31:30.000000Z"
    }
</pre>
    </div>
    </div>
  </div>


  <div class="accordion-item">
     <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      GET<h3>/api/role</h3>
      </button>
    </h2>

    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <pre>

      {
        "id": 1,
        "name": "admin",
        "created_at": "2023-12-19T18:43:38.000000Z",
        "updated_at": "2023-12-19T18:43:38.000000Z"
    },
    {
        "id": 2,
        "name": "client",
        "created_at": "2023-12-19T18:43:39.000000Z",
        "updated_at": "2023-12-19T18:43:39.000000Z"
    }
    </pre>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      GET<h3>/api/category</h3>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <pre>
      {
        "id": 1,
        "name": "техніка звязку",
        "created_at": "2023-12-19T21:57:18.000000Z",
        "updated_at": "2023-12-19T21:57:18.000000Z"
    },
    {
        "id": 2,
        "name": "компютерна техніка",
        "created_at": "2023-12-19T21:57:18.000000Z",
        "updated_at": "2023-12-19T21:57:18.000000Z"
    },
    {
        "id": 3,
        "name": "побутова техніка",
        "created_at": "2023-12-31T10:38:56.000000Z",
        "updated_at": "2023-12-31T10:38:56.000000Z"
    }
      </pre>
    </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
      GET<h3>/api/productbrend</h3>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <pre>
      {
        "id": 1,
        "name": "Samsung",
        "created_at": "2023-12-20T18:10:05.000000Z",
        "updated_at": "2023-12-20T18:10:05.000000Z"
    },
    {
        "id": 2,
        "name": "Lenovo",
        "created_at": "2023-12-20T18:10:05.000000Z",
        "updated_at": "2023-12-20T18:10:05.000000Z"
    },
    {
        "id": 3,
        "name": "Apple",
        "created_at": "2023-12-20T18:10:05.000000Z",
        "updated_at": "2023-12-20T18:10:05.000000Z"
    },
    {
        "id": 4,
        "name": "LG",
        "created_at": null,
        "updated_at": null
    }
      </pre>
      </div>
    </div>
  </div>


  <div class="accordion-item">
    <h2 class="accordion-header" id="heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapseThree">
      GET<h3>/api/productrepair</h3>
      </button>
    </h2>
    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <pre>
      {
        "id": 1,
        "name": "праски",
        "created_at": "2023-12-31T12:49:01.000000Z",
        "updated_at": "2023-12-31T12:49:01.000000Z"
    },
    {
        "id": 2,
        "name": "пилесоси",
        "created_at": "2023-12-31T12:49:27.000000Z",
        "updated_at": "2023-12-31T12:49:27.000000Z"
    },
    {
        "id": 3,
        "name": "телефони",
        "created_at": "2023-12-20T18:10:31.000000Z",
        "updated_at": "2023-12-20T18:10:31.000000Z"
    },
    {
        "id": 4,
        "name": "ноутбуки",
        "created_at": "2023-12-20T18:10:31.000000Z",
        "updated_at": "2023-12-20T18:10:31.000000Z"
    },
    {
        "id": 5,
        "name": "вентилятори",
        "created_at": "2023-12-30T22:47:22.000000Z",
        "updated_at": "2023-12-30T22:47:22.000000Z"
    },
    {
        "id": 6,
        "name": "обігрівачі",
        "created_at": "2023-12-30T22:47:39.000000Z",
        "updated_at": "2023-12-30T22:47:39.000000Z"
    },
    {
        "id": 7,
        "name": "кліматичні комплекси",
        "created_at": "2023-12-30T22:47:58.000000Z",
        "updated_at": "2023-12-30T22:47:58.000000Z"
    },
    {
        "id": 8,
        "name": "зволожувачі повітря",
        "created_at": "2023-12-30T22:48:17.000000Z",
        "updated_at": "2023-12-30T22:48:17.000000Z"
    }
      </pre>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapseThree">
      GET<h3>/api/status</h3>
      </button>
    </h2>
    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <pre>
      {
        "id": 1,
        "name": "терміново",
        "created_at": "2023-12-20T18:11:15.000000Z",
        "updated_at": "2023-12-20T18:11:15.000000Z"
    },
    {
        "id": 2,
        "name": "нетерміново",
        "created_at": "2023-12-20T18:11:15.000000Z",
        "updated_at": "2023-12-20T18:11:15.000000Z"
    }
      </pre>
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="heading7">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapseThree">
      GET<h3>/api/typerepair</h3>
      </button>
    </h2>
    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <pre>
      {
        "id": 1,
        "name": "Заміна батареї",
        "created_at": "2023-12-31T10:32:49.000000Z",
        "updated_at": "2023-12-31T10:32:49.000000Z"
    },
    {
        "id": 2,
        "name": "Заміна скла",
        "created_at": "2023-12-31T10:33:05.000000Z",
        "updated_at": "2023-12-31T10:33:05.000000Z"
    },
    {
        "id": 3,
        "name": "Ремонт джерел безперебійного живлення (ДБЖ)",
        "created_at": "2023-12-31T10:27:17.000000Z",
        "updated_at": "2023-12-31T10:27:17.000000Z"
    },
    {
        "id": 4,
        "name": "Ремонт стабілізаторів",
        "created_at": "2023-12-31T10:27:35.000000Z",
        "updated_at": "2023-12-31T10:27:35.000000Z"
    },
    {
        "id": 5,
        "name": "Ремонт ноутбуків ",
        "created_at": "2023-12-31T10:28:14.000000Z",
        "updated_at": "2023-12-31T10:28:14.000000Z"
    },
    {
        "id": 6,
        "name": "Ремонт планшетів ",
        "created_at": "2023-12-31T10:28:48.000000Z",
        "updated_at": "2023-12-31T10:28:48.000000Z"
    }
      </pre>
      </div>
    </div>
  </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>