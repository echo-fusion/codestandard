<?php

declare(strict_types=1);

namespace EchoFusion\CodeStandard\PhpCsFixer;

use PhpCsFixer\Fixer\Import\OrderedImportsFixer;

final class EchoFusionRuleSet implements RuleSet
{
    public function name(): string
    {
        return 'echo-fusion';
    }

    public function rules(): array
    {
        return [
            //<editor-fold desc="PSR-12">
            //<editor-fold desc="PSR-2">
            //<editor-fold desc="PSR-1">
            'encoding' => true,
            'full_opening_tag' => true,
            //</editor-fold>
            'blank_line_after_namespace' => true,
            'constant_case' => true,
            'braces' => true,
            'class_definition' => true,
            'elseif' => true,
            'function_declaration' => true,
            'indentation_type' => true,
            'line_ending' => true,
            'lowercase_keywords' => true,
            'method_argument_space' => ['on_multiline' => 'ensure_fully_multiline'],
            'no_break_comment' => true,
            'no_closing_tag' => true,
            'no_spaces_after_function_name' => true,
            'no_spaces_inside_parenthesis' => true,
            'no_trailing_whitespace' => true,
            'no_trailing_whitespace_in_comment' => true,
            'single_blank_line_at_eof' => true,
            'single_class_element_per_statement' => ['elements' => ['property']],
            'single_import_per_statement' => true,
            'single_line_after_imports' => true,
            'switch_case_semicolon_to_colon' => true,
            'switch_case_space' => true,
            'visibility_required' => true,
            //</editor-fold>
            'blank_line_after_opening_tag' => true,
            'compact_nullable_typehint' => true,
            'declare_equal_normalize' => true,
            'function_typehint_space' => true,
            'new_with_braces' => true,
            'no_empty_statement' => true,
            'no_leading_import_slash' => true,
            'no_leading_namespace_whitespace' => true,
            'no_whitespace_in_blank_line' => true,
            'return_type_declaration' => true,
            'single_trait_insert_per_statement' => true,
            //</editor-fold>
            'array_indentation' => true,
            'array_syntax' => [
                'syntax' => 'short',
            ],
            'blank_line_before_statement' => true,
            'cast_spaces' => true,
            'concat_space' => [
                'spacing' => 'one',
            ],
            'include' => true,
            'linebreak_after_opening_tag' => true,
            'lowercase_cast' => true,
            'lowercase_static_reference' => true,
            'magic_constant_casing' => true,
            'modernize_types_casting' => true,
            'native_function_casing' => true,
            'no_alternative_syntax' => true,
            'no_empty_comment' => true,
            'no_extra_blank_lines' => [
                'tokens' => [
                    'break',
                    'continue',
                    'curly_brace_block',
                    'parenthesis_brace_block',
                    'extra',
                    'return',
                    'square_brace_block',
                    'throw',
                    'use',
                    'use_trait',
                    'switch',
                    'case',
                    'default',
                ],
            ],
            'no_multiline_whitespace_around_double_arrow' => true,
            'no_null_property_initialization' => true,
            'no_short_bool_cast' => true,
            'no_singleline_whitespace_before_semicolons' => true,
            'no_spaces_around_offset' => true,
            'no_superfluous_elseif' => true,
            'no_trailing_comma_in_list_call' => true,
            'no_trailing_comma_in_singleline_array' => true,
            'no_unneeded_control_parentheses' => true,
            'no_unneeded_curly_braces' => true,
            'no_unneeded_final_method' => true,
            'no_unused_imports' => true,
            'no_useless_else' => true,
            'no_whitespace_before_comma_in_array' => true,
            'normalize_index_brace' => true,
            'object_operator_without_whitespace' => true,
            'ordered_imports' => [
                'sort_algorithm' => OrderedImportsFixer::SORT_ALPHA,
                'imports_order' => [
                    OrderedImportsFixer::IMPORT_TYPE_CLASS,
                    OrderedImportsFixer::IMPORT_TYPE_CONST,
                    OrderedImportsFixer::IMPORT_TYPE_FUNCTION,
                ],
            ],
            'phpdoc_annotation_without_dot' => true,
            'phpdoc_indent' => true,
            'general_phpdoc_tag_rename' => true,
            'phpdoc_inline_tag_normalizer' => true,
            'phpdoc_tag_type' => true,
            'phpdoc_no_access' => true,
            'short_scalar_cast' => true,
            'simplified_null_return' => false,
            'single_blank_line_before_namespace' => true,
            'single_quote' => true,
            'standardize_not_equals' => true,
            'ternary_operator_spaces' => true,
            'ternary_to_null_coalescing' => true,
            'trailing_comma_in_multiline' => true,
            'trim_array_spaces' => true,
            'unary_operator_spaces' => true,
            'whitespace_after_comma_in_array' => true,
            'yoda_style' => false,
            'global_namespace_import' => [
                'import_classes' => true,
                'import_constants' => true,
                'import_functions' => true,
            ],
            'align_multiline_comment' => true,
            'binary_operator_spaces' => true,
            'class_attributes_separation' => [
                'elements' => [
                    'method' => 'one',
                    'property' => 'one',
                ],
            ],
            'combine_consecutive_issets' => true,
            'combine_consecutive_unsets' => true,
            'combine_nested_dirname' => true,
            'self_static_accessor' => true,
            'single_line_comment_style' => true,
            'heredoc_indentation' => true,
            'heredoc_to_nowdoc' => true,
            'is_null' => true,
            'list_syntax' => [
                'syntax' => 'short',
            ],
            'magic_method_casing' => true,
            'mb_str_functions' => true,
            'method_chaining_indentation' => true,
            'multiline_comment_opening_closing' => true,
            'native_function_invocation' => true,
            'native_constant_invocation' => true,
            'no_blank_lines_after_class_opening' => true,
            'no_superfluous_phpdoc_tags' => [
                'allow_mixed' => true,
                'remove_inheritdoc' => true,
            ],
            'no_empty_phpdoc' => true,
            'phpdoc_align' => [
                'align' => 'left',
            ],
            'phpdoc_line_span' => true,
            'phpdoc_trim' => true,
            'multiline_whitespace_before_semicolons' => [
                'strategy' => 'no_multi_line',
            ],
            'general_phpdoc_annotation_remove' => [
                'annotations' => ['author'],
            ],

            //<editor-fold desc="risky">
            'strict_comparison' => true,
            'dir_constant' => true,
            'psr_autoloading' => true,
            //</editor-fold>

            //<editor-fold desc="doctrine related">
            'doctrine_annotation_array_assignment' => [
                'operator' => ':',
            ],
            'doctrine_annotation_braces' => false,
            'doctrine_annotation_indentation' => true,
            //</editor-fold>
        ];
    }
}
