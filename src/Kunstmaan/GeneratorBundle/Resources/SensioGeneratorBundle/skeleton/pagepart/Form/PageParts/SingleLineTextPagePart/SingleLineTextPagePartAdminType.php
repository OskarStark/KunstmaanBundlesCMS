<?php

namespace {{ namespace }}\Form\PageParts;

use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\AbstractType;

/**
 * {{ pagepart }}AdminType
 */
class {{ pagepart }}AdminType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder The form builder
     * @param array                $options The options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'label',
                TextType::class,
                [
                    'required' => true,
                    'label' => 'kuma_form.form.single_line_text_page_part.label.label',
                ]
            )
            ->add(
                'required',
                CheckboxType::class,
                [
                    'required' => false,
                    'label' => 'kuma_form.form.single_line_text_page_part.required.label',
                ]
            )
            ->add(
                'errormessage_required',
                TextType::class,
                [
                    'required' => false,
                    'label' => 'kuma_form.form.single_line_text_page_part.errormessage_required.label',
                ]
            )
            ->add(
                'regex',
                TextType::class,
                [
                    'required' => false,
                    'label' => 'kuma_form.form.single_line_text_page_part.regex.label',
                ]
            )
            ->add(
                'errormessage_regex',
                TextType::class,
                [
                    'required' => false,
                    'label' => 'kuma_form.form.single_line_text_page_part.errormessage_regex.label',
                ]
            )
            ->add(
                'internalName',
                TextType::class,
                [
                    'required' => false,
                    'label' => 'kuma_form.form.form_page_part.internal_name',
                ]
            );
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return '{{ pagepart|lower }}type';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(
            [
                'data_class' => '{{ namespace }}\Entity\PageParts\{{ pagepart }}',
            ]
        );
    }
}
