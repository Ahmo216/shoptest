import template from './sw-radio-field.html.twig';
import './sw-radio-field.scss';

const { Component, Mixin } = Shopware;

/**
 * @public
 * @description radio input field.
 * @status ready
 * @example-type static
 * @component-example
 * <sw-radio-field
 *      label="Radio field example"
 *      bordered
 *      :options="[
 *          {'value': 'value1', 'name': 'Label #1'},
 *          {'value': 'value2', 'name': 'Label #2'},
 *          {'value': 'value3', 'name': 'Label #3'},
 *          {'value': 'value4', 'name': 'Label #4'},
 *          {'value': 'value5', 'name': 'Label #5'}
 * ]"></sw-radio-field>
 */
Component.register('sw-radio-field', {
    template,
    inheritAttrs: false,

    model: {
        prop: 'value',
        event: 'change'
    },

    mixins: [
        Mixin.getByName('sw-form-field'),
        Mixin.getByName('remove-api-error')
    ],

    data() {
        return {
            /** @deprecated tag:v6.4.0 */
            currentValue: this.value
        };
    },

    watch: {
        /** @deprecated tag:v6.4.0 */
        value() { this.currentValue = this.value; }
    },

    props: {
        bordered: {
            type: Boolean,
            required: false,
            default: false
        },

        options: {
            type: Array,
            required: false,
            default: () => {
                return [];
            }
        },

        value: {
            required: false
        }
    },

    computed: {
        classes() {
            return [{
                'sw-field--radio-bordered': this.bordered
            }];
        },
        currentIndex() {
            const foundIndex = this.options.findIndex((item) => item.value === this.value);

            if (foundIndex < 0) {
                console.warn(`Given value "${this.value}" does not exists in given options`);
            }

            return foundIndex;
        }
    },

    methods: {
        onChange(event) {
            const selectedIndex = event.target.value;

            if (this.options[selectedIndex] === undefined) {
                console.warn(`Selected index "${this.value}" does not exists in given options`);
            }

            this.$emit('change', this.options[selectedIndex].value);
        }
    }
});
