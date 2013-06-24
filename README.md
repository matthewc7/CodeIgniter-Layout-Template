# CodeIgniter-Layout-Template
===========================

Basic layout template for CodeIgniter. 

# Setup

Add the 'layout' library for autoload. 

```php
$autoload['libraries'] = array('layout');
```

# Configuration

You can change the base template in the 'layout' config. It uses base as the default template. You can have multiple base templates for different layout using this layout/template.

```php
$config['template_base']  = 'base';
```

You have a content and template directories in the views. You can place all the common files in the template directory.

# Usage

You can start rendering your view using the following code. 

```php
$data['title'] = 'Title Tag'; 
$data['content'] = 'home'; //location of your content in the content directory under views.

$this->layout->render($data);
```

# Update

Will introduce asset group in the next update. 