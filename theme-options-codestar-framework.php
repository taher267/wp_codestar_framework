<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_coffee_html_options';

  //
  // Create options
  //
  CSF::createOptions( $prefix, array(
    'menu_title' => 'All Fields demo',
    'framework_title' => 'used By Jaza Group',
    'menu_slug'  => 'coffee-html',
    'menu_position' => 2,
  ) );

//-----------------------------------------------------------------
//
// Basic Fieldss
//

//Example
CSF::createSection($prefix,array(
  'id' => 'Example_Section',
  'title' => __('Examples','coffee-html'),
  'icon' =>'fas fa-border-all',
));



// Border
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Border Line-35','coffee-html'),
  'fields' => array(
array(
  'id'     => 'opt-border-1',
  'type'   => 'border',
  'title'  => 'Border',
),


)
));


// Color
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Color  Line-51','coffee-html'),
  'fields' => array(
    array(
  'id'    => 'opt-color-1',
  'type'  => 'color',
  'title' => 'Color',
),

)
));

// Color Group
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Color Group Line-65','coffee-html'),
  'fields' => array(
    array(
  'id'        => 'opt-color-group-1',
  'type'      => 'color_group',
  'title'     => 'Color Group',
  'options'   => array(
    'color-1' => 'Color 1',
    'color-2' => 'Color 2',
    'color-3' => 'Color 3',
    'color-4' => 'Color 4',
    'color-5' => 'Color 5',
  )
),


)
));


// Date
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Date  Line-88','coffee-html'),
  'fields' => array(
     array(
      'id'    => 'opt-date-1',
      'type'  => 'date',
      'title' => 'Date',
    ),

)
));

// Dimensions
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Dimensions(Width x height)  Line-102','coffee-html'),
  'fields' => array(
     array(
  'id'     => 'opt-dimensions-1',
  'type'   => 'dimensions',
  'title'  => 'Dimensions width and height',
),

)
));


// Fieldset
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Fieldset(text,color,S/W) Line-117','coffee-html'),
  'fields' => array(
   array(
  'id'     => 'opt-fieldset-1',
  'type'   => 'fieldset',
  'title'  => 'Fieldset',
  'fields' => array(
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),array(
      'id'    => 'opt-textarea',
      'type'  => 'textarea',
      'title' => 'Description',
    ),
    array(
      'id'    => 'opt-color',
      'type'  => 'color',
      'title' => 'Color',
    ),
    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
    ),
  ),
),

)
));

                                  // Gallery
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Gallery Line-152','coffee-html'),
  'fields' => array(
     array(
    'id'    => 'opt-gallery-1',
    'type'  => 'gallery',
    'title' => 'Gallery',
  ),
)
));
                                                // Group
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Group Line-164','coffee-html'),
  'fields' => array(
 array(
  'id'        => 'opt-group-1',
  'type'      => 'group',
  'title'     => 'Group',
  'fields'    => array(
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),
    array(
      'id'    => 'opt-color',
      'type'  => 'color',
      'title' => 'Color',
    ),
    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
    ),
  ),
),
)
));

                                  // Icon
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Icon Line-194','coffee-html'),
  'fields' => array(
    array(
  'id'    => 'opt-icon-1',
  'type'  => 'icon',
  'title' => 'Icon',
),

)
));
                                  // Image Select
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Image Select Line-207','coffee-html'),
  'fields' => array(
      array(
        'id'        => 'opt-image-select-1',
        'type'      => 'image_select',
        'title'     => 'Image Select',
        'options'   => array(
          'value-1' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
          'value-2' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
          'value-3' => 'http://codestarframework.com/assets/images/placeholder/80x80-2c3e50.gif',
        ),
        'default'   => 'value-2'
      ),
)
));

                                  // Normal And Hover Color
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Link Color / Normal And Hover Color Line-226','coffee-html'),
  'fields' => array(
array(
  'id'    => 'opt-link-color-1',
  'type'  => 'link_color',
  'title' => 'Link Color',
),

)
));

                                  // Map
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Map Line-240','coffee-html'),
  'fields' => array(
array(
  'id'    => 'opt-map-1',
  'type'  => 'map',
  'title' => 'Map',
  'subtitle' => 'Map Subtitle',
),
)
));


                                  // Media
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Media Line-255','coffee-html'),
  'fields' => array(
 array(
  'id'    => 'opt-media-1',
  'type'  => 'media',
  'title' => 'Media',
  'url' => false,
),

)
));


                                  // Number
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Number Line-271','coffee-html'),
  'fields' => array(
 array(
  'id'    => 'opt-number-1',
  'type'  => 'number',
  'title' => 'Number',
),
)
));

                                  // Palette
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Palette/ Color Gorup Line-284','coffee-html'),
  'fields' => array(
  array(
  'id'      => 'opt-palette-1',
  'type'    => 'palette',
  'title'   => 'Palette',
  'options' => array(
    'set1'  => array( '#f04e36', '#f36e27', '#f3d430', '#ed1683' ),
    'set2'  => array( '#f9ca06', '#b5b546', '#2f4d48', '#212b2f' ),
    'set3'  => array( '#4153ab', '#6e86c7', '#211f27', '#d69762' ),
    'set4'  => array( '#162526', '#508486', '#C8C6CE', '#B45F1A' ),
    'set5'  => array( '#bbd5ff', '#ccab5e', '#fff55f', '#197c5d' ),
  ),
  'default' => 'set3',
),
)
));

                                  // Radio
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Radio Line-305','coffee-html'),
  'fields' => array(
  array(
  'id'         => 'opt-radio',
  'type'       => 'radio',
  'title'      => 'Radio',
  'options'    => array(
    'option-1' => 'Option 1',
    'option-2' => 'Option 2',
    'option-3' => 'Option 3',
  ),
  'default'    => 'option-2'

  ),
)
));


                                  // select
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('select Line-326','coffee-html'),
  'fields' => array(
    array(
  'id'          => 'opt-select-1',
  'type'        => 'select',
  'title'       => 'Select',
  'placeholder' => 'Select an option',
  'options'     => array(
    'option-1'  => 'Option 1',
    'option-2'  => 'Option 2',
    'option-3'  => 'Option 3',
  ),
  'default'     => 'option-2'
),

  )
)
);

                                  // slider
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Slider Num Selector Slider Line-348','coffee-html'),
  'fields' => array(
    array(
       'id' => 'slider',
          'title' => __('Slider','coffee-html'),
          'type' => 'slider',
    ),

  )
)
);




                                  // sortable
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Sortable/accordion Line-366','coffee-html'),
  'fields' => array(
    array(
  'id'            => 'opt-accordion-1',
  'type'          => 'accordion',
  'title'         => 'Accordion',
  'accordions'    => array(
    array(
      'title'     => 'Accordion 1',
      'icon'      => 'fa fa-heart',
      'fields'    => array(
        array(
          'id'    => 'opt-text-1',
          'type'  => 'text',
          'title' => 'Text',
        ),
      )
    ),
    array(
      'title'     => 'Accordion 2',
      'icon'      => 'fa fa-gear',
      'fields'    => array(
        array(
          'id'    => 'opt-color-1',
          'type'  => 'color',
          'title' => 'Color',
        ),
      )
    ),
  )
),

  )
)
);
                                  // Sorter
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Sorter/ Moveable Line-404','coffee-html'),
  'fields' => array(
   array(
  'id'           => 'opt-sorter-1',
  'type'         => 'sorter',
  'title'        => 'Sorter',
  'default'      => array(
    'enabled'    => array(
      'option-1' => 'Option 1',
      'option-2' => 'Option 2',
      'option-3' => 'Option 3',
    ),
    'disabled'   => array(
      'option-4' => 'Option 4',
      'option-5' => 'Option 5',
    ),
  ),
),

  )
)
);

                                  // Spacing
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Spacing/ Padding/ margin Line-430','coffee-html'),
  'fields' => array(
 array(
  'id'    => 'opt-spacing-1',
  'type'  => 'spacing',
  'title' => 'Spacing',
),

  )
)
);


                                  // spinner
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Spinner/Number Selector Line-446','coffee-html'),
  'fields' => array(
array(
  'id'    => 'opt-spinner-1',
  'type'  => 'spinner',
  'title' => 'Spinner',
),

  )
)
);




                                  // switcher
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('switcher/ Any Section On Off/ Like S/W Line-464','coffee-html'),
  'fields' => array(
array(
  'id'    => 'opt-switcher-1',
  'type'  => 'switcher',
  'title' => 'Switcher',
),

  )
)
);


                                  // Tabbed
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Tabbed/ Tabs Line-480','coffee-html'),
  'fields' => array(
array(
  'id'            => 'opt-tabbed-1',
  'type'          => 'tabbed',
  'title'         => 'Tabbed',
  'tabs'          => array(
    array(
      'title'     => 'Tab 1',
      'icon'      => 'fa fa-heart',
      'fields'    => array(
        array(
          'id'    => 'opt-text-1',
          'type'  => 'text',
          'title' => 'Text',
        ),
      )
    ),
    array(
      'title'     => 'Tab 2',
      'icon'      => 'fa fa-gear',
      'fields'    => array(
        array(
          'id'    => 'opt-color-1',
          'type'  => 'color',
          'title' => 'Color',
        ),
      )
    ),
  )
),

  )
)
);

                                  // Typography
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Typography Line-519','coffee-html'),
  'fields' => array(
  array(
      'id'    => 'opt-typography-1',
      'type'  => 'typography',
      'title' => 'Typography',
    ),

  )
)
);

// sanitize
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('sanitize Line-534','coffee-html'),
  'fields' => array(
  array(
  'id'       => 'opt-wp-editor-3',
  'type'     => 'wp_editor',
  'title'    => 'WP Editor without sanitize',
  'sanitize' => false,
),

  )
)
);



// Button Set
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Button Set Line-552','coffee-html'),
  'fields' => array(
 array(
  'id'         => 'opt-button-set-1',
  'type'       => 'button_set',
  'title'      => 'Button Set',
  'options'    => array(
    'enabled'  => 'Enabled',
    'disabled' => 'Disabled',
  ),
  'default'    => 'enabled'
),


)
));


                                        // Background
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('Background Line-573','coffee-html'),
  'fields' => array(
    array(
      'id'    => 'opt-background-1',
      'type'  => 'background',
      'title' => 'Background',
    ),




)
));


                                        // backup
CSF::createSection($prefix,array(
  'parent' => 'Example_Section',
  'title' => __('backup Line-591','coffee-html'),
  'fields' => array(
array(
  'type' => 'backup',
),



)
));





















CSF::createSection( $prefix, array(
  'id'    => 'basic_fields',
  'title' => 'Basic Fields',
  'icon'  => 'fas fa-plus-circle',
) );
