/* Owner: App Scaffolder */
import { customFetch } from "../customFetch";
import { IPhoto } from "../../interfaces/interfaces";

type IBody = Omit<IPhoto, 'id'>;

export const createPhoto = async (
  formData: IBody,
): Promise<IBody | undefined> => {
  const result: IBody | undefined = await customFetch.post({
    url: `/photos`,
    body: JSON.stringify(formData),
  });
  return result;
};

