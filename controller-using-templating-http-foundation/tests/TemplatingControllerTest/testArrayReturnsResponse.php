    public function testArrayReturnsResponse()
    {
        $this->assertInstanceOf(
            'Symfony\Component\HttpFoundation\Response',
            (new TemplatingController(new TwigEngine(
                new Twig_Environment(new Twig_Loader_Array([
                    'index.html.twig' => '<ul>{% for item in 0 %}<li>{{ item }}</li>{% endfor %}</ul>',
                ])),
                new TemplateNameParser()
            )))->__invoke([ // This has to be implemented! (may require more or less php 5.6)
                'One',
                'Two',
                'Three',
            ])
        );
    }
