<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;

/**
 * Contact Form.
 */
class ContactForm extends Form
{
    /**
     * Builds the schema for the modelless form
     *
     * @param \Cake\Form\Schema $schema From schema
     * @return \Cake\Form\Schema
     */
    protected function _buildSchema(Schema $schema)
    {
        return $schema->addField('name', ['type' => 'string'])
					  ->addField('email', ['type' => 'string'])
					  ->addField('regard', ['type' => 'string',])
					  ->addField('body', ['type' => 'text'])
					;
    }

    /**
     * Form validation builder
     *
     * @param \Cake\Validation\Validator $validator to use against the form
     * @return \Cake\Validation\Validator
     */
    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('name',  'length', ['rule' => ['minlength', 2], 'message' => '名前は必須（2文字以上）です。'])
						 ->add('email', 'format', ['rule' => 'email', 'message' => '有効なメールアドレスを入力してください、'])
			;
    }

    /**
     * Defines what to execute once the From is being processed
     *
     * @param array $data Form data.
     * @return bool
     */
    protected function _execute(array $data)
    {
        $email = new Email('default');
        $email->from([ $data['email'] => $data['name'] ])
              ->to('contact@soundbag-studio.com')
              ->subject('[Contact Form] ' . $data['regard'] )
              ->send(
					$data['body']
				);
        return true;
    }
}
