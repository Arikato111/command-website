<?php return function () {
    ['title'=> $title] = module('wisit-router');
    $title('About');
    return <<<HTML
        <div class="box">
            <div class="cm-b">
                <a href="/">
                    <button>command</button>
                </a>
            </div>
            <h1>About</h1>
            <hr>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ratione debitis similique, ipsam veritatis distinctio eius molestiae ea voluptatum culpa repellat soluta natus? Dolores quas, ratione dolorem illum porro repellendus, eos facere labore autem consequatur odio ab culpa sunt, adipisci ex ut nihil minima sapiente. Ut eaque modi reiciendis at!
            </div>
            <hr>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ratione debitis similique, ipsam veritatis distinctio eius molestiae ea voluptatum culpa repellat soluta natus? Dolores quas, ratione dolorem illum porro repellendus, eos facere labore autem consequatur odio ab culpa sunt, adipisci ex ut nihil minima sapiente. Ut eaque modi reiciendis at!
            </div>
            <hr>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ratione debitis similique, ipsam veritatis distinctio eius molestiae ea voluptatum culpa repellat soluta natus? Dolores quas, ratione dolorem illum porro repellendus, eos facere labore autem consequatur odio ab culpa sunt, adipisci ex ut nihil minima sapiente. Ut eaque modi reiciendis at!
            </div>
            <hr>
            <div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi ratione debitis similique, ipsam veritatis distinctio eius molestiae ea voluptatum culpa repellat soluta natus? Dolores quas, ratione dolorem illum porro repellendus, eos facere labore autem consequatur odio ab culpa sunt, adipisci ex ut nihil minima sapiente. Ut eaque modi reiciendis at!
            </div>
        </div>
    HTML;
};