<?php

return array(
    'translator' => array(
        'translation_file_patterns' => array(
            'facebookComment'   => array(
                'type'          => 'phpArray',
                'base_dir'      => __DIR__ . '/../languages/facebookComment',
                'pattern'       => '%s.php',
                'text_domain'   => 'facebookComment',
            ),
        ),
    ),
    'factory' => array(
        'Grid\Facebook\Model\ApplicationSettings\AdapterFactory' => array(
            'adapter'       => array(
                'comment'   => 'Grid\FacebookComment\Model\ApplicationSettings\CommentAdapter',
            ),
        ),
        'Grid\Paragraph\Model\Paragraph\StructureFactory' => array(
            'adapter' => array(
                'facebookComment' => 'Grid\FacebookComment\Model\Paragraph\Structure\FacebookComment',
            ),
        ),
    ),
    'modules' => array(
        'Grid\Paragraph' => array(
            'customizeMapForms' => array(
                'facebookComment' => array(
                    'element'   => 'general',
                ),
            ),
        ),
    ),
    'form' => array(
        'Grid\Facebook\ApplicationSettings' => array(
            'fieldsets'     => array(
                'comment'   => array(
                    'spec'  => array(
                        'name'      => 'comment',
                        'options'   => array(
                            'label'       => 'facebookComment.form.settings.legend',
                            'description' => 'facebookComment.form.settings.description',
                        ),
                        'elements'  => array(
                            'mode'  => array(
                                'spec'  => array(
                                    'type'  => 'Zork\Form\Element\Radio',
                                    'name'  => 'mode',
                                    'options'   => array(
                                        'label'     => 'facebookComment.form.settings.mode',
                                        'options'   => array(
                                            'default'   => 'facebookComment.form.settings.mode.default',
                                            'specific'  => 'facebookComment.form.settings.mode.specific',
                                            'admins'    => 'facebookComment.form.settings.mode.admins',
                                        ),
                                    ),
                                    'attributes'    => array(
                                        'value'     => 'default',
                                    ),
                                ),
                            ),
                            'appId' => array(
                                'spec'  => array(
                                    'type'  => 'Zork\Form\Element\Text',
                                    'name'  => 'appId',
                                    'options'   => array(
                                        'label' => 'facebookComment.form.settings.appId',
                                    ),
                                    'attributes'    => array(
                                        'data-js-type'                  => 'js.form.displayOnValue',
                                        'data-js-displayonvalue-field'  => 'comment[mode]',
                                        'data-js-displayonvalue-value'  => 'specific',
                                    ),
                                ),
                            ),
                            'admins' => array(
                                'spec'  => array(
                                    'type'  => 'Zork\Form\Element\Text',
                                    'name'  => 'admins',
                                    'options'   => array(
                                        'label'         => 'facebookComment.form.settings.admins',
                                        'description'   => 'facebookComment.form.settings.admins.description',
                                    ),
                                    'attributes'    => array(
                                        'data-js-type'                  => 'js.form.displayOnValue js.form.element.facebookUserIdList',
                                        'data-js-displayonvalue-field'  => 'comment[mode]',
                                        'data-js-displayonvalue-value'  => 'admins',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'Grid\Paragraph\CreateWizard\Start' => array(
            'elements'  => array(
                'type'  => array(
                    'spec'  => array(
                        'options'   => array(
                            'options'   => array(
                                'social'    => array(
                                    'options'   => array(
                                        'facebookComment' => 'paragraph.type.facebookComment',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'Grid\Paragraph\Meta\Edit' => array(
            'fieldsets' => array(
                'facebookComment' => array(
                    'spec' => array(
                        'name'      => 'facebookComment',
                        'options'   => array(
                            'label'     => 'paragraph.type.facebookComment',
                            'required'  => false,
                        ),
                        'elements'  => array(
                            'name'  => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Text',
                                    'name'      => 'name',
                                    'options'   => array(
                                        'label'     => 'paragraph.form.abstract.name',
                                        'required'  => false,
                                    ),
                                ),
                            ),
                            'colorscheme' => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Select',
                                    'name'      => 'colorscheme',
                                    'options'   => array(
                                        'label'     => 'facebookComment.paragraph.form.colorscheme',
                                        'required'  => false,
                                        'options'   => array(
                                            'light' => 'facebookComment.paragraph.form.colorscheme.light',
                                            'dark'  => 'facebookComment.paragraph.form.colorscheme.dark',
                                        ),
                                    ),
                                ),
                            ),
                            'numPosts'  => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Number',
                                    'name'      => 'numPosts',
                                    'options'   => array(
                                        'label'     => 'facebookComment.paragraph.form.numPosts',
                                        'required'  => false,
                                    ),
                                    'attributes'    => array(
                                        'min'       => 1,
                                        'step'      => 1,
                                    ),
                                ),
                            ),
                            'orderBy'   => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Select',
                                    'name'      => 'orderBy',
                                    'options'   => array(
                                        'label'     => 'facebookComment.paragraph.form.orderBy',
                                        'required'  => false,
                                        'options'   => array(
                                            'social'        => 'facebookComment.paragraph.form.orderBy.social',
                                            'reverse_time'  => 'facebookComment.paragraph.form.orderBy.reverse_time',
                                            'time'          => 'facebookComment.paragraph.form.orderBy.time',
                                        ),
                                    ),
                                ),
                            ),
                            'width'     => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Number',
                                    'name'      => 'width',
                                    'options'   => array(
                                        'label'         => 'facebookComment.paragraph.form.width',
                                        'description'   => 'facebookComment.paragraph.form.width.description',
                                        'required'      => false,
                                    ),
                                    'attributes'    => array(
                                        'min'       => 100,
                                        'step'      => 1,
                                    ),
                                ),
                            ),
                            'href'      => array(
                                'spec'  => array(
                                    'type'      => 'Zork\Form\Element\Url',
                                    'name'      => 'href',
                                    'options'   => array(
                                        'label'         => 'facebookComment.paragraph.form.href',
                                        'description'   => 'facebookComment.paragraph.form.href.description',
                                        'required'      => false,
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_map' => array(
            'grid/paragraph/render/facebookComment' => __DIR__ . '/../view/grid/paragraph/render/facebookComment.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
